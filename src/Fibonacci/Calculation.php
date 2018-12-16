<?php

namespace Fibonacci;

class Calculation
{
    /**
     * @param int $level
     * @return array
     */
    public function sequence(int $iteration): array
    {
        $result = [0];

        for ($number = 0; $number < $iteration; $number++) {
            $last = count($result);

            $numberLast = $result[$last - 1] > 0 ? $result[$last - 1] : 1;
            $numberBeforeLast = isset($result[$last - 2]) ? $result[$last - 2] : 0;

            $next = $numberBeforeLast + $numberLast;
            array_push($result, $next);
        }

        return $result;
    }
}
