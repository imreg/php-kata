<?php

namespace String;

class Tokenizer
{
    private $separator = '/\s+/';

    /**
     * @param string $string
     * @return array
     */
    function tokenize(string $string): array
    {
        return preg_split($this->separator, $string);
    }

    /**
     * @param $separator
     * @return $this
     */
    public function setSeparator($separator): self
    {
        $this->separator = $separator;
        return $this;
    }
}
