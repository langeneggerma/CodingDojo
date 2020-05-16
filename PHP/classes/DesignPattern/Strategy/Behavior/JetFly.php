<?php


namespace CodingDojo\DesignPattern\Strategy\Behavior;
use CodingDojo\DesignPattern\Strategy\BehaviorInterface\FlyBehavior;

class JetFly implements FlyBehavior
{
    public static function fly(): string
    {
       return "Ich kann Jet Fliegen";
    }
}