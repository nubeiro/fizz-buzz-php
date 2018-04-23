<?php

namespace Kata;


class Kata
{

    public function run(array $set = [])
    {
        $set = array_map(function ($number) {
            if ($number % 3 === 0) {
                return 'Fizz';
            }
            return $number;
        },
            $set);
        $set = array_map(function($number) {
            if (is_int($number) && $number % 5 === 0) {
                return 'Buzz';
            }
            return $number;
        }, $set);
        return $set;
    }
}