<?php

class Car {
    var $numSerie;
    var $marca;
    var $modelo;
    var $version;
    var $puertas;
    var $color;

    function __construct($numSerie, $marca, $modelo, $version, $puertas, $color)
    {
        $this->numSerie = $numSerie;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->version = $version;
        $this->puertas = $puertas;
        $this->color = $color;
    }

    function acelerar() {
        return 'Voy a 100 en mi ' . $this->modelo." ".$this->color;
    }

    function  informationCar() {
        return $this->numSerie."|".$this->marca."|".$this->modelo."|".$this->version."|".$this->puertas."|".$this->color;
    }
}

$car1 = new Car('123456789','Honda','City','Sedan','4 puertas','Gris');
$car2 = new Car('987654321','Toyota','Corolla','Sedan','4 puertas','Azul');
$car3 = new Car('192837465','Toyota','Yaris','Hatchback','5 puertas','Blanco');

echo $car1->informationCar()."<br>";
echo $car2->informationCar()."<br>";
echo $car3->informationCar()."<br><br>";

echo $car1->acelerar()."<br>";
echo $car2->acelerar()."<br>";
echo $car3->acelerar()."<br>";