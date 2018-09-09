<?php
/**
 * Created by PhpStorm.
 * User: alasdair
 * Date: 09.09.18
 * Time: 17:37
 */

namespace Pskovitin\Dates;


class BirthDays
{
    private $birthDate;
    private $todayDate;

    public function __construct($birthDate)
    {
        $this->birthDate = $birthDate;
        $this->todayDate = date ( "Y-m-d");
    }

    public function findTotalDays ()
    {
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);

        $totalSecs = $todayTime - $birthTime;
        $totalDays = floor($totalSecs / 3600 / 24);
        return $totalDays;
    }
}