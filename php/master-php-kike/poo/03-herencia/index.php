<?php
  require_once 'clases.php';
  $persona = new Persona();
  $persona->setNombre('Pedro');
  var_dump($persona);
  $informatico = new Informatico();
  $informatico->setAltura(1.90);
  var_dump($informatico);
  $tecnico = new TecnicoRedes();
  var_dump($tecnico);
?>