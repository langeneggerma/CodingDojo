<?php
if ( !file_exists(__DIR__ . '/vendor/autoload.php')) {
    die('This tests requires composer. Try composer install');
}
require __DIR__ . '/vendor/autoload.php';

use CodingDojo\DesignPattern\Strategy\Ducks\MountainDuck;
use CodingDojo\DesignPattern\Strategy\Ducks\ForestDuck;
use CodingDojo\DesignPattern\Strategy\Behavior\JetFly;
use CodingDojo\DesignPattern\Strategy\Behavior\SingleQuak;
use CodingDojo\DesignPattern\Strategy\Behavior\SimpleFly;
use CodingDojo\DesignPattern\Strategy\Behavior\NonQuak;


$duck = new MountainDuck(new JetFly, new SingleQuak);
$duck2 = new ForestDuck(new SimpleFly(), new NonQuak());
?>

<div>
    
    <?php
    echo $duck->getClassName();
    echo $duck->fly().'<br>';
    echo $duck->quack().'<br><hr>';
    
    echo $duck2->getClassName();
    echo $duck2->fly().'<br>';
    echo $duck2->quack().'<br>';
    ?>
</div>









