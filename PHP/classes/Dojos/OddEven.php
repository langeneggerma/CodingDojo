<?php


namespace CodingDojo\Dojos;


class OddEven
{

    private const I_ODD = "Odd";
    private const I_EVEN = "Even";

    public function convert(int $number)
    {
        if ($number % 2 == 0) return self::I_EVEN;
        if ($this->isPrime($number)) return (String)$number;

        return self::I_ODD;
    }

    public function convertRange(int $start, int $end)
    {
        $result = "";
        for ($i = $start; $i <= $end; $i++) {
            $result .= $this->convert($i) . "<br>";
        }

        return $result;
    }

    public function convertWithString(int $number)
    {
        $numberTxt = (String)$number;

        if ($numberTxt == "1") return $numberTxt;

        if ($this->endsWith($numberTxt,"0") ||
            $this->endsWith($numberTxt,"2") ||
            $this->endsWith($numberTxt,"4") ||
            $this->endsWith($numberTxt,"6") ||
            $this->endsWith($numberTxt,"8"))
            return self::I_EVEN;

        if ($this->isPrime($number)) return $numberTxt;

        return self::I_ODD;
    }

    private function endsWith($numberTxt, $needle)
    {
        if($numberTxt == "1")return false;

        if(substr($numberTxt, -1) === $needle) return true;
        return false;
    }

    private function isPrime(int $number)
    {

        if ($number == 1) return false;

        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) return false;
        }

        return true;
    }
}