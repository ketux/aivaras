<?php
/**
 * Created by PhpStorm.
 * User: Jonukas
 * Date: 2018.05.20
 * Time: 12:46
 */

//require_once __DIR__ . '/../src/Util/NumberFormatter.php';

namespace App\Util;

//use App\Util\NumberFormatter;

class MoneyFormatter
{

    /**
     * @var NumberFormatter
     */
    private $numberFormatter;


  // public function __construct(NumberFormatter $numberFormatter)
  //  {
  //      $this->numberFormatter = $numberFormatter;
  //  }

    public function formatEur ($number) {

       $euro = NumberFormatter::class;
       $euro = $number . " €";
       return $euro;
    }

    public function formatUsd ($number) {

        $usd = NumberFormatter::class;
        $usd = "$ " . $number;
        return $usd;
    }
}