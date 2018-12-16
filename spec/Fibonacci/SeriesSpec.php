<?php

namespace spec\Fibonacci;

use Fibonacci\Series;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SeriesSpec extends ObjectBehavior
{
    function it_returns_zero_in_array_when_is_on_level_zero()
    {
        $this->sequence(0)->shouldReturn([0]);
    }

    function it_returns_zero_and_one_in_array_when_is_on_level_one()
    {
        $this->sequence(1)->shouldReturn([0, 1]);
    }

    function it_returns_zero_and_one_one_in_array_when_is_on_level_two()
    {
        $this->sequence(2)->shouldReturn([0, 1, 1]);
    }

    function it_returns_zero_and_one_one_two_in_array_when_is_on_level_three()
    {
        $this->sequence(3)->shouldReturn([0, 1, 1, 2]);
    }

    function it_returns_zero_and_one_one_two_three_in_array_when_is_on_level_four()
    {
        $this->sequence(4)->shouldReturn([0, 1, 1, 2, 3]);
    }
}
