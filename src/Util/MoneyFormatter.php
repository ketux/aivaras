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

/**
 * Class MoneyFormatter
 * @param NumberFormatter $numberFormatter
 * @package App\Util
 */
class MoneyFormatter
{

    /**
     * @var NumberFormatter
     */
    private $numberFormatter;


    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }


    public function formatEur($number)
    {
        return $this->numberFormatter->convert($number) . ' €';
    }


    public function formatUsd($number)
    {
        return '$' . $this->numberFormatter->convert($number);
    }
}