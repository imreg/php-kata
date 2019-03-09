<?php

use \Tennis\Game;
use \Tennis\Player;
use \Tennis\Formatter;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    function testLove_All_When_Neither_Player_Has_Scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $game = new Game($playerOne, $playerTwo, new Formatter());
        $this->assertEquals('Love - all', $game->getScore());
    }

    function testGame_Fifteen_Love_When_First_Player_Has_Scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();

        $game = new Game($playerOne, $playerTwo, new Formatter());
        $this->assertEquals('Fifteen - Love', $game->getScore());
    }

    function testGame_Duece_When_All_Have_Fourty_Scored()
    {
        $playerOne = new Player('Player1');
        $playerTwo = new Player('Player2');

        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerOne->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();
        $playerTwo->scorePoint();

        $game = new Game($playerOne, $playerTwo, new Formatter());
        $this->assertEquals('Duece', $game->getScore());
    }
}
