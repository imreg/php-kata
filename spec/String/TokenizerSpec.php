<?php

namespace spec\String;

use String\Tokenizer;
use PhpSpec\ObjectBehavior;

class TokenizerSpec extends ObjectBehavior
{
    function it_tokenizes_any_white_space_separated(Tokenizer $tokenizer)
    {
        $this->tokenize("1\t2 3")->shouldReturn(['1','2','3']);
    }
}
