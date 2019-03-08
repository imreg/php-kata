<?php

namespace Tennis;

class Player
{
    /**
     * @var int
     */
    private $point = 0;

    /**
     * @var string
     */
    private $name;

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
     * Player constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function scorePoint()
    {
        $this->point += 1;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function hasDifferentScoreTo(Player $player): bool
    {
        return $this->point !== $player->point;
    }

    public function hasLessThanThree(): bool
    {
        return $this->point < 3;
    }

    public function hasThree(): bool
    {
        return $this->point === 3;
    }

    public function formatScoreWith(Player $player)
    {
        return $this->scores[$this->point] . ' - ' . $this->scores[$player->point];
    }

    public function hasAdvantageOver(Player $player): bool
    {
        return $this->point > 3 && $player->point > 3 && $this->point > $player->point;
    }

    public function hasWonAgainst(Player $player)
    {
        return abs($this->point - $player->point) >= 2
            && ($this->point >= 3 || $player->point >= 3);
    }

    public function format(array $scores, $string)
    {
        return $scores[$this->point] . $string;
    }
}
