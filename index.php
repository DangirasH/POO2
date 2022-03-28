<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();


require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();




require_once 'Truck.php';
$mytruck = new Truck(100,'red',3,'fuel');

echo $mytruck->forward()."Power Rangers <br>";
echo $mytruck->brake()."<br>";
echo $mytruck->cargoState() .'<br>';

$mytruck->setCargo(100);
echo $mytruck->cargoState() ."<br>";
