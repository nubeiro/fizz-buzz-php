<?php

namespace Kata\Tests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

    /**
     * @dataProvider fizzBuzzSets
     */
    public function testMultiplesOfThreeAsFizz($set, $expected)
    {
        $this->assertEquals($expected, (new Kata())->run($set));
    }

    public function fizzBuzzSets() {
        return [
            'rules for three' => [
                'set' => [3, 9, 12, 16, 21, 4],
                'expected' => ['Fizz', 'Fizz', 'Fizz', 16, 'Fizz', 4],
            ],
            'rules for five' => [
                'set' => [2, 4, 3, 9, 14, 15, 16, 20],
                'expected' => [2, 4, 'Fizz', 'Fizz', 14, 'Fizz', 16, 'Buzz'],
            ]
        ];
    }
}
