<?php


namespace CodingDojo\Dojos;


class FizzBuzz
{
    public function toFizzBuzz(int $number)
    {
        $result = "";
        $numberToString = (string)$number;

        if ($number == 0) return $numberToString;

        if ($number % 3 == 0) $result = "Fizz";
        if ($number % 5 == 0) $result = $result . "Buzz";

        if (empty($result)) return $numberToString;
        return $result;
    }
}