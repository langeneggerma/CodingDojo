<?php
// Setup composer autoload
if ( !file_exists(__DIR__ . '/vendor/autoload.php')) {
    die('This tests requires composer. Try composer install');
}
require __DIR__ . '/vendor/autoload.php';

$object = new \CodingDojo\FizzBuzz();

for($i = 1; $i < 20;$i++){
    echo $object->toFizzBuzz($i).'<br>';
}

