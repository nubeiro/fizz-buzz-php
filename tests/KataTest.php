<?php

namespace Kata\Tests;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

    public function testPrintOneLineFromRange()
    {
        $this->expectOutputString(implode("\n", range(0, 100)));
        $kata = new Kata();
        $kata->run();
    }
}
