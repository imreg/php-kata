<?php

namespace spec\Tennis;

use PhpSpec\ObjectBehavior;
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

    function it_displays_fifteen_love_when_first_player_has_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->points();

        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Fifteen - Love');
    }

    function it_displays_thirty_love_when_first_player_has_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->points();
        $playerOne->points();

        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Thirty - Love');
    }

    function it_displays_fifteen_all_when_first_player_and_second_have_fifteen_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(1);
        $playerTwo->getPoints()->willReturn(1);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Fifteen - all');
    }

    function it_displays_thirty_all_when_first_player_and_second_have_thirty_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(2);
        $playerTwo->getPoints()->willReturn(2);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Thirty - all');
    }

    function it_displays_thirty_fifteen_when_first_player_has_thirty_and_second_have_fifteen_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(2);
        $playerTwo->getPoints()->willReturn(1);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Thirty - Fifteen');
    }

    function it_displays_duece_when_all_have_fourty_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getPoints()->willReturn(3);
        $playerTwo->getPoints()->willReturn(3);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Duece');
    }

    function it_displays_advantage_when_first_player_has_5_points_and_second_have_4_points(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getName()->willReturn('Player1');
        $playerTwo->getName()->willReturn('Player2');
        $playerOne->getPoints()->willReturn(5);
        $playerTwo->getPoints()->willReturn(4);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Advantage - Player1');
    }

    function it_displays_winner_when_first_player_has_5_points_and_second_have_3_points(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getName()->willReturn('Player1');
        $playerTwo->getName()->willReturn('Player2');
        $playerOne->getPoints()->willReturn(5);
        $playerTwo->getPoints()->willReturn(3);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Winner - Player1');
    }

    function it_displays_forty_fifteen_when_first_player_has_forty_and_second_have_fifteen_scored(
        Player $playerOne,Player $playerTwo
    )
    {
        $playerOne->getName()->willReturn('Player1');
        $playerTwo->getName()->willReturn('Player2');
        $playerOne->getPoints()->willReturn(3);
        $playerTwo->getPoints()->willReturn(1);
        $this->beConstructedWith($playerOne, $playerTwo);

        $this->getScore()->shouldReturn('Winner - Player1');
    }
}
