<?php

namespace spec\Tennis;

use PhpSpec\ObjectBehavior;
use Tennis\Player;
use Tennis\Scores;

class FormatterSpec extends ObjectBehavior
{
    function it_has_different_score()
    {
        $this->formatScore(new Player('second'), new Scores())->shouldReturn('Love - all');
    }
}
