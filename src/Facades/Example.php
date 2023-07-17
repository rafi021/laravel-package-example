<?php

namespace Rafi021\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rafi021\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rafi021\Example\Example::class;
    }
}
