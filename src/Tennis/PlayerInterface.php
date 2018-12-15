<?php

namespace Tennis;

interface PlayerInterface
{
    public function points(int $point);
    public function getPoints(): int;
}