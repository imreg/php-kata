<?php

namespace spec\Tennis;

use PhpSpec\ObjectBehavior;

class PlayerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('player');
    }

    function it_return_points()
    {
        $this->points();
        $this->getPoints()->shouldBe(1);
    }

    function it_return_name()
    {
        $this->getName()->shouldBe('player');
    }
}
