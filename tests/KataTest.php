<?php

namespace Kata\Tests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

    public function testMultiplesOfThreeAsFizz()
    {
        $set = [3, 9, 12, 16, 21, 4];
        $expected = ['Fizz', 'Fizz', 'Fizz', 16, 'Fizz', 4];
        $this->assertEquals($expected, (new Kata())->run($set));
    }

    public function testMultiplesOfFiveAsBuzz()
    {
        $set = [2, 4, 3, 9, 14, 15, 16, 20];
        $expected = [2, 4, 'Fizz', 'Fizz', 14, 'Fizz', 16, 'Buzz'];
        $this->assertEquals($expected, (new Kata())->run($set));

    }

}
