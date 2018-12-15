<?php

namespace spec\Tennis;

use Tennis\Game;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Tennis\Player;

class GameSpec extends ObjectBehavior
{
    function it_displays_love_all_when_neither_player_has_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerTwo->getPoints()->willReturn(0);
        $playerOne->getPoints()->willReturn(0);
        $this->beConstructedWith($playerOne, $playerTwo);
        $this->getScore()->shouldReturn('Love - all');
    }

    function it_displays_fifteen_love_when_first_player_has_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(1);
        $playerTwo->getPoints()->willReturn(0);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Fifteen - Love');
    }

    function it_displays_fifteen_all_when_both_players_have_one_point_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(1);
        $playerTwo->getPoints()->willReturn(1);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Fifteen - all');
    }

    function it_displays_thirty_fifteen_when_first_player_has_thirty_and_second_has_fifteen_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(2);
        $playerTwo->getPoints()->willReturn(1);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Thirty - Fifteen');
    }

    function it_displays_thirty_all_when_first_player_has_thirty_and_second_has_thirty_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerTwo->getPoints()->willReturn(2);
        $playerOne->getPoints()->willReturn(2);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Thirty - all');
    }

    function it_displays_duce_when_first_player_and_second_player_equals_and_at_least_forty_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(4);
        $playerTwo->getPoints()->willReturn(4);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Duece');
    }

    function it_displays_advantage_when_first_player_has_one_more_and_second_has_at_least_forty_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(5);
        $playerTwo->getPoints()->willReturn(4);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Advantage - Player1');
    }
}
