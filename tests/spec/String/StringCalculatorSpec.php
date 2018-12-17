<?php

namespace spec\String;

use String\Tokenizer;
use PhpSpec\ObjectBehavior;

class StringCalculatorSpec extends ObjectBehavior
{
    function let(Tokenizer $tokenizer)
    {
        $this->beConstructedWith($tokenizer);
    }

    function it_return_zero_for_empty_string(Tokenizer $tokenizer)
    {
        $tokenizer->tokenize('')->willReturn([]);

        $this->sum('')->shouldReturn(0);
    }

    function it_return_one_for_the_string_one(Tokenizer $tokenizer)
    {
        $tokenizer->setSeparator('/\s+/')->willReturn($tokenizer);
        $tokenizer->tokenize('1')->willReturn(['1']);

        $this->sum('1')->shouldReturn(1);
    }

    function it_return_sum_separated_numbers(Tokenizer $tokenizer)
    {
        $tokenizer->setSeparator('/\s+/')->willReturn($tokenizer);
        $tokenizer->tokenize('1 2')->willReturn(['1', '2']);
        $this->sum('1 2')->shouldReturn(3);
    }

    function it_return_sum_of_number_separated_by_any_character(Tokenizer $tokenizer)
    {
        $this->extractSeparator('~1~2~3~4')->shouldReturn('/~/');
    }
}
