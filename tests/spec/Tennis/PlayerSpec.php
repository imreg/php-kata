<?php

namespace spec\Tennis;

use PhpSpec\ObjectBehavior;
use Tennis\Player;
use Tennis\Scores;

class PlayerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('first');
    }

    function it_has_different_score(Player $second)
    {
        $second->getPoint()->willReturn(2);
        $this->scorePoint();
        $this->hasDifferentScoreTo($second)->shouldBe(true);
    }

    function it_has_less_than_three()
    {
        $this->scorePoint();
        $this->hasLessThanThree()->shouldBe(true);
    }

    function it_has_three()
    {
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->hasThree()->shouldBe(true);
    }

    function it_has_advantage_over_second(Player $second)
    {
        $second->getPoint()->willReturn(4);
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->hasAdvantageOver($second)->shouldBe(true);
    }

    function it_has_won_against_second(Player $second)
    {
        $second->getPoint()->willReturn(1);
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->scorePoint();
        $this->hasWonAgainst($second)->shouldReturn(true);
    }

    function it_return_format_score_with_fifteen_thirteen(Player $second)
    {
        $second->getPoint()->willReturn(2);
        $this->scorePoint();
        $this->formatScoreWith($second, new Scores())->shouldReturn('Fifteen - Thirty');
    }

    function it_return_format_all()
    {
        $this->format(new Scores(), ' - all')->shouldReturn('Love - all');
    }
}
