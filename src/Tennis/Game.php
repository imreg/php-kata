<?php

namespace Tennis;


class Game implements GameInterface
{
    const PLAYER_1 = 'Player1';
    const PLAYER_2 = 'Player2';

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
        if ($this->hasAdvantage() == true) {
            return 'Advantage - ' . self::PLAYER_1;
        }

        if ($this->player1->getPoints() !== $this->player2->getPoints()) {
            return $this->scores[$this->player1->getPoints()] . ' - ' . $this->scores[$this->player2->getPoints()];
        }

        if ($this->isDuce() === true) {
            return 'Duece';
        }

        if ($this->isAll() === true) {
            return $this->scores[$this->player1->getPoints()] . ' - all';
        }
    }

    public function score(string $player)
    {
        if ($player === self::PLAYER_1) {
            $this->player1->points();
        } else {
            $this->player2->points();
        }
    }

    private function isAll(): bool
    {
        if ($this->player1->getPoints() === $this->player2->getPoints()
            && $this->player1->getPoints() <= 3) {
            return true;
        }
        return false;
    }

    private function isDuce(): bool
    {
        if ($this->player1->getPoints() === $this->player2->getPoints()
            && $this->player1->getPoints() >= 3) {
            return true;
        }
        return false;
    }

    private function hasAdvantage(): bool
    {
        if (($this->player1->getPoints()) > 4 || ($this->player2->getPoints()) > 4) {
            return true;
        }
        return false;
    }
}
