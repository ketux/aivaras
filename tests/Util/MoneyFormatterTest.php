<?php
/**
 * Created by PhpStorm.
 * User: Jonukas
 * Date: 2018.05.22
 * Time: 10:46
 */

namespace App\Tests\Util;


use App\Util\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;


class MoneyFormatterTest extends TestCase
{


    public function convertEur()
    {
        /** @var MoneyFormatter|MockObject $apiMock1 */
        $apiMock1 = $this->createMock(MoneyFormatter::class);
        $apiMock1->expects($this->any())
            ->method('formatEur')
            ->with('14')
            ->willReturn('14 €');

        $moneyFormatter = new MoneyFormatter($apiMock1);
        $result->$moneyFormatter($apiMock1);
        $this->assertEquals('14 €', $result->euro());
    }

    public function convertUsd()

    {
        /** @var MoneyFormatter|MockObject $apiMock2*/
        $apiMock2 = $this->createMock(MoneyFormatter::class);
        $apiMock2->expects($this->any())
            ->method('formatUsd')
            ->with('14')
            ->willReturn('$14');

        $moneyFormatter = new MoneyFormatter($apiMock2);
        $result->$moneyFormatter($apiMock2);
        $this->assertEquals('14 €', $result->usd());

    }

}