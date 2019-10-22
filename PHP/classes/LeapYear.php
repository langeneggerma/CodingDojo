<?php


namespace CodingDojo;


class LeapYear
{

    public static function isLeapYear(int $year)
    {
        if($year < 0 ) die('This is not a correct year.');

        if ($year % 400 == 0) return true;
        return $year % 4 == 0 && $year % 100 != 0;

    }
}