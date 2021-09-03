<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue( 2 == $this->addFunction(1, 1));
    }

    public function addFunction($digit1, $digit2) {
        return $digit1 + $digit2;
    }

}
