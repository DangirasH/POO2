<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();


require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();




require_once 'Truck.php';
$mytruck = new Truck(100,'red',3,'fuel');

echo $myTruck->forward()."Power Rangers <br>";
echo $myTruck->brake()."<br>";
echo $myTruck->cargoState() .'<br>';

$myTruck->setCargo(100);
echo $myTruck->cargoState() ."<br>";
