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

    public function scorePoint
		()
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

    public function getPoint(): int
    {
        return $this->point;
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasDifferentScoreTo(Player $player): bool
    {
        return $this->getPoint() !== $player->getPoint();
    }

    /**
     * @return bool
     */
    public function hasLessThanThree(): bool
    {
        return $this->getPoint() < 3;
    }

    /**
     * @return bool
     */
    public function hasThree(): bool
    {
        return $this->getPoint() === 3;
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasAdvantageOver(Player $player): bool
    {
        return $this->getPoint() > 3 && $player->getPoint() > 3 && $this->getPoint() > $player->getPoint();
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasWonAgainst(Player $player)
    {
        return abs($this->getPoint() - $player->getPoint()) >= 2
            && ($this->getPoint() >= 3 || $player->getPoint() >= 3);
    }

    /**
     * @param Player $player
     * @param Scores $scores
     * @return string
     */
    public function formatScoreWith(Player $player, Scores $scores)
    {
        return $scores->scores($this->getPoint()) . ' - ' . $scores->scores($player->getPoint());
    }

    /**
     * @param Scores $scores
     * @param $string
     * @return string
     */
    public function format(Scores $scores, $string)
    {
        return $scores->scores($this->getPoint()) . $string;
    }
}
