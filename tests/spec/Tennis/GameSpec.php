<?php

namespace spec\Tennis;

use PhpSpec\ObjectBehavior;
use Tennis\Formatter;
use Tennis\Player;

class GameSpec extends ObjectBehavior
{
    function it_displays_love_all_when_neither_player_has_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Love - all');
    }

    function it_displays_fifteen_love_when_first_player_has_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Fifteen - Love');
    }

    function it_displays_thirty_love_when_first_player_has_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Thirty - Love');
    }

    function it_displays_fifteen_all_when_first_player_and_second_have_fifteen_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Fifteen - all');
    }

    function it_displays_thirty_all_when_first_player_and_second_have_thirty_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Thirty - all');
    }

    function it_displays_thirty_fifteen_when_first_player_has_thirty_and_second_have_fifteen_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Thirty - Fifteen');
    }

    function it_displays_duece_when_all_have_fourty_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Duece');
    }

    function it_displays_advantage_when_first_player_has_5_points_and_second_have_4_points()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Advantage - Player1');
    }

    function it_displays_winner_when_first_player_has_5_points_and_second_have_3_points()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());

        $this->getScore()->shouldReturn('Winner - Player1');
    }

    function it_displays_forty_fifteen_when_first_player_has_forty_and_second_have_fifteen_scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();

        $this->beConstructedWith($playerOne, $playerTwo, new Formatter());
        $this->getScore()->shouldReturn('Winner - Player1');
    }
}
