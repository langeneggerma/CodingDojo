<?php


namespace CodingDojo\DesignPattern\Strategy\BehaviorInterface;


use phpDocumentor\Reflection\Types\String_;

interface FlyBehavior
{
    public static function fly() : string ;
}