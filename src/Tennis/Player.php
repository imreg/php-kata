<?php

namespace Tennis;

class Player implements PlayerInterface
{
    /**
     * @var int
     */
    private $point = 0;

    public function points(int $point = 1)
    {
        $this->point += $point;
    }

    public function getPoints(): int
    {
        return $this->point;
    }
}
