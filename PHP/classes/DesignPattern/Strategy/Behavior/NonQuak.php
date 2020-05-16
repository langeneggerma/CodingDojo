<?php


namespace CodingDojo\DesignPattern\Strategy\Behavior;

use CodingDojo\DesignPattern\Strategy\BehaviorInterface\QuackBehavior;

class NonQuak implements QuackBehavior
{
    
    public static function quack(): string
    {
        return "Kann nicht Quacken";
    }
}