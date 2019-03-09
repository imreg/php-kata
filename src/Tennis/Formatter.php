<?php

namespace Tennis;

class Formatter
{
    public function formatScore(Player $player, Scores $scores)
    {
        return $player->format($scores, ' - all');
    }
}
