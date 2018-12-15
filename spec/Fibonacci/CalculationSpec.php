<?php

namespace spec\Fibonacci;

use Fibonacci\Calculation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculation::class);
    }
}
