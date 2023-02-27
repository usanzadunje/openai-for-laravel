<?php

namespace Usanzadunje\OpenAI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Usanzadunje\OpenAI\OpenAI
 */
class OpenAI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Usanzadunje\OpenAI\OpenAI::class;
    }
}
