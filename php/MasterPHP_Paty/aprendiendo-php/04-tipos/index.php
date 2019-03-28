<?php

/*
  Tipos de datos en PHP:

  Enteros (int / integer) = 99
  Coma flotante / decimales (float / double) = 3.45
  Cadenas (string) = "Hola yo soy un string"
  Boleano (bool) = true false 
  null 
  Array (coleccion de datos)
  Objetos
*/


 $numero = 100;
 $decimal = 27.9;
 $texto= "Soy un texto";
 $verdadero= true;
 $falso = false;
 $nula = null;
 

// imprime el tipo de variable: ejemplos
 //echo gettype($numero); //integer

 //echo gettype($decimal);// double

 //echo gettype($texto);// string

/* echo $verdadero;// boolean muestra un uno
 echo "<br>";
 echo gettype($verdadero);*/
 
 /*echo $falso;// boolean no muestra nada es 0
 echo "<br>";
 echo gettype($falso);*/

 echo gettype($nula);//null

?>