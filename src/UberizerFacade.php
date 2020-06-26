<?php

namespace Fixwa\Uberizer;

use Illuminate\Support\Facades\Facade;

class UberizerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'uberizer';
    }
}
