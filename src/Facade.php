<?php

namespace Songshenzong\Echox;

/**
 * Class Facade
 *
 * @package Songshenzong\Echox
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Echox';
    }
}
