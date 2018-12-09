<?php

namespace String;

class Tokenizer
{
    function tokenize(string $string): array
    {
        return preg_split('/\s+/', $string);
    }
}
