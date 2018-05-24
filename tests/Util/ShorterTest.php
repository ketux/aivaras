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

class ShorterTest extends TestCase
{
    public function testAdd()
    {
        $shorter = new NumberFormatter();
        $result = $shorter->add2(535216);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(535, $result);
    }
}