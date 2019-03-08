<?php

namespace Tennis;

class Formatter
{
    /**
     * @var array
     */
    private $scores = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    public function formatScore(Player $player)
    {
        return $player->format($this->scores, ' - all');
    }
}
