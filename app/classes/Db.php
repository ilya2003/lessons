<?php
namespace app\classes;


class Db extends Config
{

    public function sql($sql)
    {
        $connection =  mysqli_connect(self::HOST,self::USER,self::PASS, self::DBNAME);
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
}