<?php

namespace Tennis;

class Game
{
    const PLAYER_1 = 'Player1';

    /**
     * @var int
     */
    private $player1Score = 0;

    /**
     * @var int
     */
    private $player2Score = 0;

    /**
     * @var array
     */
    private $scores = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forthy',
    ];

    /**
     * @return string
     */
    public function getScore(): string
    {
        if ($this->player1Score !== $this->player2Score) {
            return $this->scores[$this->player1Score] . ' - ' . $this->scores[$this->player2Score];
        }

        return $this->scores[$this->player1Score] . ' - all';
    }

    public function score($player)
    {
        if ($player === self::PLAYER_1) {
            $this->player1Score += 1;
        } else {
            $this->player2Score += 1;
        }
    }
}
