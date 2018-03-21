<?php

namespace Casbin\Persist;


use Casbin\Model\Model;

trait PolicyLineTrait
{
/*
 // LoadPolicyLine loads a text line as a policy rule to model.
func LoadPolicyLine(line string, model model.Model) {
	tokens := strings.Split(line, ", ")

	key := tokens[0]
	sec := key[:1]
	model[sec][key].Policy = append(model[sec][key].Policy, tokens[1:])
}
 */

    protected function loadPolicyLine(string $line, Model $model): void
    {
        if ('' === $line || strncmp($line, '#', 1) !== 0) {
            return;
        }

        list($key, $sec, $tokens) = explode(', ', $line);

        $model[$sec][$key] = \array_slice($tokens, 2);
    }
}