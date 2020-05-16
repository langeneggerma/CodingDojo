<?php


namespace CodingDojo\DesignPattern\Strategy\Ducks;

use CodingDojo\DesignPattern\Strategy\BehaviorInterface\FlyBehavior;
use CodingDojo\DesignPattern\Strategy\BehaviorInterface\QuackBehavior;


class MountainDuck extends Duck
{
    /**
     * MountainDuck constructor.
     * @param FlyBehavior $flyBehaivor
     * @param QuackBehavior $quackBehavior
     */
    public function __construct(FlyBehavior $flyBehaivor, QuackBehavior $quackBehavior)
    {
        parent::__construct($flyBehaivor, $quackBehavior);
    }
    
}