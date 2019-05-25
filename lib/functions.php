<?php
// функция для работы с БД
function db($sql)
{
   $connection =  mysqli_connect("localhost","ilya",12345, "ilya");
   mysqli_query($connection,"SET NAMES UTF8");

   if($sql)
   {
       $result = mysqli_query($connection,$sql);
       while ($row = mysqli_fetch_assoc($result))
       {
           $ready_data[] = $row;
       }
       return $ready_data;
   }
}

//выводит текущую дату и день недели
function today()
{
    $days['Sunday'] = 'Воскресенье';
    $days['Monday'] = 'Понедельник';
    $days['Tuesday'] = 'Вторник';
    $days['Wednesday'] = 'Среда';
    $days['Thursday'] = 'Четверг';
    $days['Friday'] = 'Пятница';
    $days['Saturday'] = 'Суббота';

    $month['January'] = 'Января';
    $month['February'] = 'Февраля';
    $month['March'] = 'Марта';
    $month['April'] = 'Апреля';
    $month['May'] = 'Мая';
    $month['June'] = 'Июня';
    $month['July'] = 'Июля';
    $month['August'] = 'Августа';
    $month['September'] = 'Сентября';
    $month['October'] = 'Октября';
    $month['November'] = 'Ноября';
    $month['December'] = 'Декабря';

    echo "Сегодня ";
    echo $days[date("l")].", ".date("j")." ".$month[date('F')]." ".date('Y')." года";
}