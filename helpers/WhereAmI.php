<?php

namespace ALameLlama\Geographer\Helpers;

/**
 * Class WhereAmI
 * @package ALameLlama\Geographer\Helpers
 */
class WhereAmI
{
    /**
     * @return string
     */
    public static function path()
    {
        return dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'resources';
    }
}
