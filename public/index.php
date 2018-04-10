<?php


require __DIR__ . '/../vendor/autoload.php';
$Hello = new \App\Wcs\Hello();
echo $Hello->talk();

$helloworld = new \HelloWorld\SayHello();
echo $helloworld->world();
