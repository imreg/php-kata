<?php

namespace spec\Tennis;

use Tennis\Game;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    function it_displays_love_all_when_neither_player_has_scored()
    {
        $this->getScore()->shouldReturn('Love - all');
    }

    function it_displays_fifteen_love_when_first_player_has_scored()
    {
        $this->score('Player1');
        $this->getScore()->shouldReturn('Fifteen - Love');
    }

    function it_displays_fifteen_all_when_both_players_have_one_point_scored()
    {
        $this->score('Player1');
        $this->score('Player2');
        $this->getScore()->shouldReturn('Fifteen - all');
    }

    function it_displays_thirty_fifteen_when_first_player_has_thirty_and_second_has_fifteen_scored()
    {
        $this->score('Player1');
        $this->score('Player2');
        $this->score('Player1');
        $this->getScore()->shouldReturn('Thirty - Fifteen');
    }

    function it_displays_thirty_all_when_first_player_has_thirty_and_second_has_thirty_scored()
    {
        $this->score('Player1');
        $this->score('Player2');
        $this->score('Player1');
        $this->score('Player2');
        $this->getScore()->shouldReturn('Thirty - all');
    }
}
