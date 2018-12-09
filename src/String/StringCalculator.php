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
        if (empty($string)) {
            return 0;
        }

        $separator = $this->extractSeparator($string);

        return array_sum($this->tokenizer->setSeparator($separator)->tokenize($string));
    }

    /**
     * @param $string
     * @return string
     */
    public function extractSeparator($string)
    {
        $separator = "/\s+/";

        if (is_numeric($string[0]) === false) {
            $separator = '/' . $string[0] . '/';
        }
        return $separator;
    }
}
