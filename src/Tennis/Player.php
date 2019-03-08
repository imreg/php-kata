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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasDifferentScoreTo(Player $player): bool
    {
        return $this->point !== $player->point;
    }

    /**
     * @return bool
     */
    public function hasLessThanThree(): bool
    {
        return $this->point < 3;
    }

    /**
     * @return bool
     */
    public function hasThree(): bool
    {
        return $this->point === 3;
    }

    /**
     * @param Player $player
     * @param Scores $scores
     * @return string
     */
    public function formatScoreWith(Player $player, Scores $scores)
    {
        return $scores->scores($this->point) . ' - ' . $scores->scores($player->point);
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasAdvantageOver(Player $player): bool
    {
        return $this->point > 3 && $player->point > 3 && $this->point > $player->point;
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasWonAgainst(Player $player)
    {
        return abs($this->point - $player->point) >= 2
            && ($this->point >= 3 || $player->point >= 3);
    }

    /**
     * @param Scores $scores
     * @param $string
     * @return string
     */
    public function format(Scores $scores, $string)
    {
        return $scores->scores($this->point) . $string;
    }
}
