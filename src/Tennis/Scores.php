<?php

namespace Tennis;

class Scores
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

    public function scores($points)
    {
        return $this->scores[$points];
    }
}
