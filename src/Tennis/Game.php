<?php

namespace Tennis;


class Game
{
    /**
     * @var Player
     */
    private $player1;

    /**
     * @var Player
     */
    private $player2;

    /**
     * @var array
     */
    private $scores = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    /**
     * Game constructor.
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * @return string
     */
    public function getScore(): string
    {
        if( $this->isWinner()) {
            return 'Winner - '.$this->leaderPlayer();
        }

        if ($this->isAdvantage()) {
            return 'Advantage - '.$this->leaderPlayer();
        }

        if ($this->isDuce()) {
            return 'Duece';
        }

        if ($this->isAll()) {
            return $this->scores[$this->player1->getPoints()] . ' - all';
        }

        if ($this->player1->getPoints() !== $this->player2->getPoints()
            && $this->player1->getPoints() < 3
            && $this->player2->getPoints() < 3
        ) {
            return $this->scores[$this->player1->getPoints()] . ' - ' . $this->scores[$this->player2->getPoints()];
        }
    }

    private function isAll(): bool
    {
        if (($this->player1->getPoints() === $this->player2->getPoints())
            && $this->player1->getPoints() < 3
            && $this->player2->getPoints() < 3
        ) {
            return true;
        }
        return false;
    }

    private function isDuce(): bool
    {
        if (($this->player1->getPoints() === $this->player2->getPoints())
            && $this->player1->getPoints() === 3
            && $this->player2->getPoints() === 3
        ) {
            return true;
        }
        return false;
    }

    private function isAdvantage(): bool
    {
        if (($this->player1->getPoints() > 3)
            || ($this->player2->getPoints() > 3 )
        ) {
            return true;
        }
        return false;
    }

    private function leaderPlayer(): string
    {
        if ($this->player1->getPoints() > $this->player2->getPoints()) {
            return $this->player1->getName();
        }
        return $this->player2->getName();
    }

    private function isWinner(): bool
    {
        if(abs($this->player1->getPoints() - $this->player2->getPoints()) >= 2
            && ($this->player1->getPoints() >= 3 || $this->player2->getPoints() >= 3)
        ) {
            return true;
        }
        return false;
    }
}
