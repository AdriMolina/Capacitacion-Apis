<?php
	/*bucle while

	Estructura de control que itera o repite una serie e instrucciones una o tantas veces como se deseee en base a condiciciones que el cliente lleva

	*Si condicion se cumple ejecuta codigo como tantas veces se quiera
*/
	$numero =5;
while ($numero <= 100) {
	echo $numero;
	
if ($numero !=100) {
	echo ", ";
}
$numero++;
}
echo "<hr/>";
//ejemplo
if (isset($_GET['numero'])) {
	//Cambiar tipo de dato
	$numero = (int) $_GET ['numero'];
}else{
	$numero =3;
}

echo "<h1>tabla de multiplicar del numero $numero</h1>";

$contador =1;
while ($contador <= 10) {
	echo "$numero x $contador =" .($numero*$contador)."<br/>";
	$contador++;
}
echo "<hr>";
//DO WHILE

/*do{
	//Bloque de condiciones
}while (condicion) {
	# code...
}
*/

$edad = 18;
$contador =1;
do{
	echo "Tienes acceso a local privado $contador <br/>";
	$contador++;
}while ($edad>=18 && $contador<=10);

 ?>

 
<style type="text/css">
	h1,h2,h3,h4,h5,h6 {
		
		color: brown;
	}
</style