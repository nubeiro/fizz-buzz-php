<?php

namespace Kata;


class Kata
{
    public function run(array $set = [])
    {
        $isMultipleOfThree = function ($number) {
            return (is_int($number) && $number % 3 === 0);
        };
        $isMultipleOFive = function($number) {
            return (is_int($number) && $number % 5 === 0);
        };

        $set = $this->apply($set, $isMultipleOfThree, 'Fizz');
        $set = $this->apply($set, $isMultipleOFive, 'Buzz');

        return $set;
    }

    public function apply($set, callable $rule, $fizzyBuzzy) {
        return array_map(function ($number) use ($rule, $fizzyBuzzy) {
            if ($rule($number)) {
                return $fizzyBuzzy;
            }
            return $number;
        }, $set);
    }
}