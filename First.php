<?php

namespace vinny;


class First
{
    static $myStr = "v";

    public static function Sey()
    {

        echo self::$myStr;
        self::$myStr .= 'vvv<br>';

    }
}

class Second
{
     public function Divider($a, $b)
    {
        if ($b == 0) {
            //throw new Exception ("Деление на ноль невозможно в этой галактике");
        }

        return $a / $b;

    }
}