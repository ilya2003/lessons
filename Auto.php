<?php

class Auto
{
    public $type = "Автомобиль";
    public $brand;
    public $model;
    public $year;
    public $color;
    public $speed;

    public function __construct($b,$m,$y,$c,$s)
    {
        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
        $this->color = $c;
        $this->speed = $s;

        $this->info();
    }

    protected function info()
    {
        echo "<br>".$this->type;
        echo "<br>Производитель: ".$this->brand;
        echo "<br>Модель: ".$this->model;
        echo "<br>Год выпуска : ".$this->year ;
        echo "<br>Цвет : ".$this->color ;
        echo "<br>Скорость (max) : ".$this->speed." км/ч<br>" ;
    }
}