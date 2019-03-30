<?php


/*FOR 

for(variable contador, condicion, actualizado contador){
	//Bloque de instrucciones
}
*/
//Ejemplo 1
$resultado = 0; 

for ($i=0; $i <= 100; $i++) { 
	$resultado = $resultado + $i;
	echo "<p>$resultado<p/>";
}

echo "<h1>El resultado es: $resultado<h1/>";

//Break: Salir de la ejecución del bucle en caso de que no se cumpla la condicion


?>