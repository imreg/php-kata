<?php

use \Fibonacci\Series;
use PHPUnit\Framework\TestCase;

class SeriesTest extends TestCase
{
    function testSequence()
    {
        $series = new Series();
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8], $series->sequence(6));
    }
}
