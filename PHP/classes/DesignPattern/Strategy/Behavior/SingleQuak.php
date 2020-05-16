<?php


namespace CodingDojo\DesignPattern\Strategy\Behavior;
use CodingDojo\DesignPattern\Strategy\BehaviorInterface\QuackBehavior;

class SingleQuak implements QuackBehavior
{
    
    public static function quack(): string
    {
        return "Single Quack";
    }
}