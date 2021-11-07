<?php
class car
{
    private static $instance = null;

    public static function getinstance()
    {
        if (isset(self::$instance)) {
            echo " The origin object obj has created and this like a cloned one <br>";
            return self::$instance;
        } else {
            echo "1st object<br>";
            self::$instance = new car();      // c1 or c2 or c3 ...... 
            return self::$instance;
        }
    }
}




$car1 = car::getinstance();

$car2 =  car::getinstance();
$car3 =  car::getinstance();
$car4 =  car::getinstance();
$car5 =  car::getinstance();
$car6 =  car::getinstance();
$car7 =  car::getinstance();
$car8 =  car::getinstance();
