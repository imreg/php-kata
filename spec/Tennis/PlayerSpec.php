<?php

namespace spec\Tennis;

use Tennis\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function it_return_points()
    {
        $this->points();
        $this->getPoints()->shouldBe(1);
    }
}
