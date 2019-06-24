<?php
 
class Auto
{
    public static $col;
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

        static::$col++;

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

class Truck extends Auto
{
    public static $col;
    public $type = "Грузовик";
    public $cargo;

    public function __construct($b, $m, $y, $c, $s, $cg)
    {
        $this->cargo = $cg;
        parent::__construct($b, $m, $y, $c, $s);
        echo "Грузоподъемность : ".$this->cargo." т.<br>" ;
    }

}

class Bus extends Auto
{
    public static $col;
    public $type= "Автобус";
    public $seats;

    public function __construct($b, $m, $y, $c, $s, $st)
    {
        $this->seats=$st;
        parent::__construct($b, $m, $y, $c, $s);
        echo "Количество мест : " .$this->seats."<br>";
    }
}