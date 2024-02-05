<?php

namespace Pranta\Roadmap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pranta\Roadmap\Roadmap
 */
class Roadmap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pranta\Roadmap\Roadmap::class;
    }
}
