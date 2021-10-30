<?php

const PI = 3.141516;

abstract class Car
{

    protected $speed = 0;

    public static $classVersion = '1';

    public const SPEEDUNIT = 'm/s';

    abstract protected function speedUp(int $v);

    public final function getSpeed()
    {
        return $this->speed;
    }

    public static function getVersion()
    {

        return self::$classVersion;
    }
}
function getMaxAge(){
    return 100;
}
class myCar extends Car
{

    protected $speed = 0;
    public const SPEEDUNIT = 'km/s';
    public const MAXAGE = 2020 + 40*3;
    public function speedUp(int $v)
    {
        $this->speed += $v;
    }

    public function getParentV()
    {
        return parent::getVersion();
    }


}

$classVar = 'myCar';
$car = new $classVar;

//$car->speedUp(5);
$classVar = 'myCar';
//var_dump($car->getParentV());
//var_dump(Car::getVersion());
echo $car::SPEEDUNIT;
