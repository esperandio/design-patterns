<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Strategy\MallardDuck;
use Strategy\RedheadDuck;
use Strategy\RubberDuck;

$objMallardDuck = new MallardDuck();
$objRedheadDuck = new RedheadDuck();
$objRubberDuck = new RubberDuck();

$objMallardDuck->quack();
echo "<br>";
$objRedheadDuck->quack();
echo "<br>";
$objRubberDuck->quack();
echo "<br>";

echo "<br>";

$objMallardDuck->swim();
echo "<br>";
$objRedheadDuck->swim();
echo "<br>";
$objRubberDuck->swim();
echo "<br>";

echo "<br>";

$objMallardDuck->performFly();
echo "<br>";
$objRedheadDuck->performFly();
echo "<br>";
$objRubberDuck->performFly();
echo "<br>";

echo "<br>";

var_dump($objMallardDuck);
echo "<br><br>";
var_dump($objRedheadDuck);
echo "<br><br>";
var_dump($objRubberDuck);
echo "<br><br>";
