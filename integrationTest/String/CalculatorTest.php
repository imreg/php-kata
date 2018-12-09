<?php

use String\StringCalculator;
use String\Tokenizer;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    function testStringCalculator()
    {
        $string = new StringCalculator(new Tokenizer());
        $this->assertEquals(3, $string->sum('1 2'));
    }
}
