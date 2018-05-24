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

class RounderTest extends TestCase
{
    public function testAdd()
    {
        $rounder = new NumberFormatter();
        $result = $rounder->add1(2835779);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(2.84, $result);
    }
}