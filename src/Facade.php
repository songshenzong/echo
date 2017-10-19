<?php

namespace Songshenzong\BashEcho;

/**
 * Class Facade
 *
 * @package Songshenzong\BashEcho
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BashEcho';
    }
}
