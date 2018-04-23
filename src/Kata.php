<?php

namespace Kata;


class Kata
{
    public function run(array $set = [])
    {
        $set = $this->apply($set, $this->isMultipleOf(3), 'Fizz');
        $set = $this->apply($set, $this->isMultipleOf(5), 'Buzz');

        return $set;
    }

    private function isMultipleOf($multiplier)
    {
        return function ($number) use ($multiplier) {
            return (is_int($number) && $number % $multiplier === 0);
        };
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