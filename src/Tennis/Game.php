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
     * @var Formatter
     */
    private $formatter;

    /**
     * Game constructor.
     * @param Player $player1
     * @param Player $player2
     * @param Formatter $formatter
     */
    public function __construct(
        Player $player1,
        Player $player2,
        Formatter $formatter
    ) {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->formatter = $formatter;
    }

    /**
     * @return string
     */
    public function getScore(): string
    {
        if ($this->player1->hasWonAgainst($this->player2)) {
            return 'Winner - ' . $this->player1->getName();
        }

        if ($this->player2->hasWonAgainst($this->player1)) {
            return 'Winner - ' . $this->player2->getName();
        }

        if ($this->player1->hasAdvantageOver($this->player2)) {
            return 'Advantage - ' . $this->player1->getName();
        }

        if ($this->player2->hasAdvantageOver($this->player1)) {
            return 'Advantage - ' . $this->player2->getName();
        }

        if ($this->isDuce()) {
            return 'Duece';
        }

        if ($this->isAll()) {
            return $this->formatter->formatScore($this->player1, new Scores());
        }

        if ($this->player1->hasDifferentScoreTo($this->player2)
            && $this->player1->hasLessThanThree()
            && $this->player2->hasLessThanThree()
        ) {
            return $this->player1->formatScoreWith($this->player2, new Scores());
        }
    }

    /**
     * @return bool
     */
    private function isAll(): bool
    {
        return !$this->player1->hasDifferentScoreTo($this->player2)
            && $this->player1->hasLessThanThree()
            && $this->player2->hasLessThanThree();
    }

    /**
     * @return bool
     */
    private function isDuce(): bool
    {
        return !$this->player1->hasDifferentScoreTo($this->player2)
            && $this->player1->hasThree()
            && $this->player1->hasThree();
    }
}
