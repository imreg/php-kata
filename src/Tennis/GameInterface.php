<?php

namespace Tennis;

interface GameInterface
{
    /**
     * @param string $player
     */
    public function score(string $player);
}