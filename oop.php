<?php
require_once "Auto.php";

$my_car = new Auto("Audi","A8",2018,"чёрный",240);
$friend_car = new Auto("Tesla","X10",2018,"белый",280);
$mother_car = new Auto("Volvo","X70",2019,"красный",190);
$some_truck = new Truck("Scania","xxx",2019,"зелёный",180,10);
$my_bus = new Bus("Man","X20",2016,"белый",80,64);

echo "<br>Количество автомобилей ".Auto::$col;
echo "<br>Количество Грузовиков ".Truck::$col;
echo "<br>Количество Автобусов".Bus::$col;