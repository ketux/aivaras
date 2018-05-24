<?php
/**
 * Created by PhpStorm.
 * User: Jonukas
 * Date: 2018.05.18
 * Time: 14:42
 */

namespace App\Util;

//use PHPUnit\Framework\TestCase;


class NumberFormatter
{
    public function add1($a)
    {
        $add1 = round ($a / 1000000, 2);
        return $add1;
    }

    public function add2($a)
    {
        $add2 = round ($a / 1000, 0);
        return $add2;
    }

    public function convert ($number)
    {
        //$letter = "M";
        // 2835779
        if ($number >= 999500 && $number < INF || $number >= -999500 && $number < INF) {
            return round($number / 1000000, 2);

        }

        // 535216
        if ($number >= 99950 && $number < 999500 || $number >= -99950 && $number < -999500) {
            return round($number / 1000, 0);
        }

        // 27533.78
        if ($number >= 1000 && $number < 99500 || $number >= -1000 && $number < -99500) {
            return round($number);
        }

        // kiti
        if ($number > 0 && $number < 1000) {
            return round($number, 2);
        }

        if (mb_substr($number, -2) === '00') {
            return round($number);
        }

        return $number;
    }
}