<?php

// Bucle while 
/* Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces sea necesario, en base  a una condición*/


//ESte ejemplo imprime hasta el numero 100
$numero = 0;
while ($numero <= 100) {
	echo "$numero";

//Este codigo es solo para añadirle la coma y un espacio entre cada nuemero menos en el 100
	if ($numero != 100) {
		echo ", ";
	}

	$numero++;
}




//Ejemplo 2 :While y GET

echo "<hr/>";

if(isset($GET['numero'])){
	//cambiar tipo de dato
	$numero = (int)$_GET['numero'];
}else{
	$numero = 5; //aqui se define el numero de la tabla a multiplicar
}

echo "<h1>Tabla de multiplicar del numero: $numero</h1>";


$contador = 1;//este inicia en 1 y termina en 10 con la condicion de while

while ($contador <= 10) {
	echo "$numero x $contador = ".($numero*$contador)."<br/>";
	$contador++;// aumenta l contador de uno en uno hasta el 10 del while
}


/*DO WHILE
do{
    //Bloque de instrucciones   
  } While(condicion);
*/

echo "<hr/>";

$edad = 18; 
$contador = 1;

do{
     echo "Tienes acceso al local privado $contador<br/>";
     $contador++;
}While($edad >= 18 && $contador <= 10);

?>