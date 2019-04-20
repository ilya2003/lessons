<?php
$vegetables["помидоры"]=array("сорт1"=>5,"сорт2"=>8);
$vegetables["огурцы"]=array("сорт1"=>41,"сорт2"=>12);
$vegetables["морковка"]=array("сорт1"=>15,"сорт2"=>7);
$vegetables["лук"]=array("сорт1"=>2,"сорт2"=>14);

foreach ($vegetables as $key=>$value)
{
    echo $key."<br>";
    foreach ($value as $sort=>$weight)
    {
        echo $sort." - ".$weight." кг.<br>";
    }
}