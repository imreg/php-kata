<?php

namespace String;

class StringCalculator
{
    /**
     * @var Tokenizer
     */
    private $tokenizer;

    /**
     * StringCalculator constructor.
     * @param Tokenizer $tokenizer
     */
    public function __construct(Tokenizer $tokenizer)
    {
        $this->tokenizer = $tokenizer;
    }

    /**
     * @param $string
     * @return float|int
     */
    public function sum($string): int
    {
        if(empty($string)) {
            return 0;
        }

        return array_sum($this->tokenizer->tokenize($string));
    }

    /**
     * @param $string
     * @return string
     */
    public function extractSeparator($string)
    {
        $separator = "/\s+/";

        if ($string[0] === '\\') {
            $separator = '/' . $string[1] . '/';
        }
        return $separator;
    }
}
