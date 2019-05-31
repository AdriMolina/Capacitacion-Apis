<?php

class Coche{
  public $color;
  public $marca;
  public $modelo;
  public $velocidad;
  public $caballaje;
  public $plazas;

  public function __construct($marca){
    $this->color = 'Rojo';
    $this->marca = $marca;
    $this->modelo = 'Aventador';
    $this->velocidad = 300;
    $this->caballaje = 500;
    $this->plazas = 2;
  }

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

?>