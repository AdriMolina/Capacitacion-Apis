<?php

class Coche{
  public $color='Rojo';
  public $marca='Ferrari';
  public $modelo='Aventador';
  public $velocidad=300;
  public $caballaje=500;
  public $plazas=2;

  public function getColor(){
    return $this->color;
  }

  public function setColor($color){
    $this->color = $color;
  }

  public function acelerar(){
    $this->velocidad++;
  }
  
  public function frenar(){
    $this->velocidad--;
  }

  public function getVelocidad(){
    return $this->velocidad;
  }
}

$coche = new Coche();
var_dump($coche);
?>