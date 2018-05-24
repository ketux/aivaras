<?php
/**
 * Created by PhpStorm.
 * User: Jonukas
 * Date: 2018.05.18
 * Time: 13:11
 */

namespace App\Tests\Util;

use App\Util\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{

    public function getResults()
    {
        return [
            ['2835779', '2.84'],
         //   ['535216', '535'],
         //   ['27533.78', '27 534'],
         //   ['66.6666', '66.67'],
        ];
    }

    /**
     * @dataProvider getResults
     */
    public function testAdd($number, $expected)
    {
        $rounder = new NumberFormatter();
        $result = $rounder->convert($number);
        // assert that your calculator added the numbers correctly!
        $this->assertEquals($expected, $result);
    }


}