<?php

namespace Kata;


class Kata
{
    public function run(array $set = [])
    {
        $specs = [
            15 => 'FizzBuzz',
            3 => 'Fizz',
            5 => 'Buzz',
        ];

        foreach ($specs as $number => $string) {
            $set = array_map(
                $this->apply($this->isMultipleOf($number), $string),
                $set);
        }
        return $set;
    }

    private function apply($rule, $fizzyBuzzy)
    {
        return function ($number) use ($rule, $fizzyBuzzy) {
            if ($rule($number)) {
                return $fizzyBuzzy;
            }
            return $number;
        };
    }

    private function isMultipleOf($multiplier)
    {
        return function ($number) use ($multiplier) {
            return (is_int($number) && $number % $multiplier === 0);
        };
    }

}