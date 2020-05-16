<?php


namespace CodingDojo\DesignPattern\Strategy\Behavior;

use CodingDojo\DesignPattern\Strategy\BehaviorInterface\FlyBehavior;

class SimpleFly implements FlyBehavior
{
    public static function fly():string {
        return 'Ich fliege Simple';
    }
}