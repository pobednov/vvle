<?php
/**
 * Created by PhpStorm.
 * User: Vinny
 * Date: 28.12.2017
 * Time: 14:06
 */

namespace vinny;


class First
{
    static $myStr = "v";

    public static function Sey(){

        echo self::$myStr;
        self::$myStr .= 'vvv<br>';

    }
}