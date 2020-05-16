<?php


namespace CodingDojo\DesignPattern\Strategy\Ducks;

use CodingDojo\DesignPattern\Strategy\BehaviorInterface\FlyBehavior;
use CodingDojo\DesignPattern\Strategy\BehaviorInterface\QuackBehavior;


abstract class Duck
{
    public $IflyBehaivor;
    public $quackBehavior;
    
    public function __construct(FlyBehavior $flyBehaivor, QuackBehavior $quackBehavior)
    {
        $this->IflyBehaivor =  $flyBehaivor;
        $this->quackBehavior = $quackBehavior;
    }
    
    public function fly() :string {
        return $this->IflyBehaivor::fly();
    }
    
    public function quack() : string {
        return $this->quackBehavior::quack();
    }
    
    public function getClassName() : string {
        $classPath = explode("\\", get_called_class());
        return substr(end($classPath), 0).'<br>';
    }
}