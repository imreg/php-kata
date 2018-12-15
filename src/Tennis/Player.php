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

    public function points()
    {
        $this->point += 1;
    }

    public function getPoints(): int
    {
        return $this->point;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
