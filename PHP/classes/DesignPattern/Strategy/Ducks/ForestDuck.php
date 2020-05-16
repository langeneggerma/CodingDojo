<?php


namespace CodingDojo\DesignPattern\Strategy\Ducks;

use CodingDojo\DesignPattern\Strategy\BehaviorInterface\FlyBehavior;
use CodingDojo\DesignPattern\Strategy\BehaviorInterface\QuackBehavior;


class ForestDuck extends Duck
{
    public function __construct(FlyBehavior $flyBehaivor, QuackBehavior $quackBehavior)
    {
        parent::__construct($flyBehaivor, $quackBehavior);
    }
    
}