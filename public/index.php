<?php
/**
 * Created by PhpStorm.
 * User: louise
 * Date: 08/04/18
 * Time: 15:16
 */

require __DIR__ . '/../vendor/autoload.php';
$Hello = new \App\Wcs\Hello();
echo $Hello->talk();

$helloworld = new \HelloWorld\SayHello();
echo $helloworld->world();