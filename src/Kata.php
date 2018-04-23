<?php

namespace Kata;


class Kata
{

    public function run(array $set = [])
    {
        $ruleOfThree = function ($number) {
            if ($number % 3 === 0) {
                return 'Fizz';
            }
            return $number;
        };
        $ruleOfFive = function ($number) {
            if (is_int($number) && $number % 5 === 0) {
                return 'Buzz';
            }
            return $number;
        };
        $set = $this->mapWith($ruleOfThree, $set);
        $set = $this->mapWith($ruleOfFive, $set);

        return $set;
    }

    public function mapWith(callable $rule, $set) {
        return array_map($rule, $set);
    }
}