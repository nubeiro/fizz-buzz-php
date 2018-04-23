<?php

namespace Kata\Tests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

    /**
     * @dataProvider fizzBuzzSets
     */
    public function testFizzBuzz($set, $expected)
    {
        $this->assertEquals($expected, (new Kata())->run($set));
    }

    public function fizzBuzzSets()
    {
        return [
            'rules for three' => [
                'set' => [3, 9, 12, 16, 21, 4],
                'expected' => ['Fizz', 'Fizz', 'Fizz', 16, 'Fizz', 4],
            ],
            'rules for five' => [
                'set' => [2, 4, 3, 9, 14, 16, 20],
                'expected' => [2, 4, 'Fizz', 'Fizz', 14, 16, 'Buzz'],
            ],
            'rules for five and three' => [
                'set' => [2, 3, 5, 15, 20, 25, 30],
                'expected' => [2, 'Fizz', 'Buzz', 'FizzBuzz', 'Buzz', 'Buzz', 'FizzBuzz'],
            ]
        ];
    }
}
