<?php

namespace spec\String;

use PhpSpec\ObjectBehavior;

class TokenizerSpec extends ObjectBehavior
{
    function it_tokenizes_any_white_space_separated()
    {
        $this->tokenize("1\t2\n3")->shouldReturn(['1','2','3']);
    }

    function it_tokenizes_any_string_with_specified_separator()
    {
        $this->setSeparator('/~/');
        $this->tokenize("1~2~3")->shouldReturn(['1','2','3']);
    }
}
