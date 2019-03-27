<?php 
	//CONDICIONALES
	/*
	IF:
	if(condicion){
		instrucciones
	}else{
		otras instrucciones
	}

	
	Operadores de comparación
	== igual
	=== identico
	!= diferente
	<> diferente
	< menor que
	> mayor que
	<= menor igual
	>= mayor igual
	* 
	//Operadores lógicos

	&& and
	|| or
	! no
	and, or

	*/

//ejemplo2
		echo "<hr>";
	$color = "e";

	if ($color == "rojo") {
		echo "El color es rojo";
	}else{
		echo "El color NO es rojo";
	}

	echo "<hr>";

	$year = 2018;

	if ($year < 2019) {
		echo "Año anterior a 2019";
	}else{
		echo "No es 2019";
	}

		echo "<hr>";
//ejemplo3

	$nombre = "David Extremadura";
	$ciudad = "Madrid";
	$continente = "America";
	$edad = 49;
	$mayoria_edad = 18;

	if ($edad >= $mayoria_edad) {
		echo "<h2>$nombre es mayor de edad</h2>";
		if ($continente == "Europa") {
			echo "<h2>Y es de $ciudad</h2>";
		}else{
			echo "<h2>y no es Europeo</h2>";
		}
	}else{
		echo "<h2>$nombre No es mayor de edad</h2>";
	}
	echo "<hr>";
//ejemplo4
	$dia = 5;

	/*if ($dia ==1) {
		echo "Es lunes";
	}else{
		if ($dia ==2) {
			echo "es martes";
		}else{
			if ($dia ==3) {
				echo "es miercoles";
			}else{
				if ($dia ==4) {
					echo "es jueves";
				}else{
					if ($dia ==5) {
						echo "es viernes";
					}else{
						if ($dia ==6) {
							echo "es sabado";
						}else{
							if ($dia ==7) {
								echo "es domingo";
							}
						}
					}
				}
			}		
		}
	}*/
	if ($dia ==1) {
		echo "lunes";
	}elseif ($dia ==2) {
		echo "martes";
	}elseif ($dia ==3) {
		echo "miercoles";
	}elseif ($dia ==4) {
		echo "jueves";
	}elseif ($dia ==5) {
		echo "viernes";
	}elseif ($dia ==6) {
		echo "sabado";
	}elseif ($dia ==7) {
		echo "domingo";
	}

	echo "<hr>";

	//ejemplo5

	$edad1 = 18;
	$edad2 = 64;
	$edad_oficial = 12;

	if ($edad_oficial >= $edad1 && $edad_oficial<=$edad2) {
		echo "<h2>Que trabaje</h2>";
	}else{
		echo "<h2>No pos no puede trabajar</h2>";
	}

	echo "<hr>";
	
	$pais = "Francia";
	if ($pais == "Mexico" || $pais == "España" ||$pais == "Colombia") {
		echo "<h2>Aqui hablan español</h2>";
	}else{
		echo "<h2>Aqui no hablan spanish</h2>";
	}

	//GOTO
	goto marca;
	echo "<h3>uno</h3>";
	echo "<h3>due</h3>"; 
	echo "<h3>tre</h3>"; 
	echo "<h3>cuatro</h3>";  

marca: echo "<h1>Me salte cuatro echos brow</h1>";  
	//ejemplo6
	
	$dia = 7;


	switch ($dia) {
		case 1:
			echo "<h2>Lunes</h2>";
			break;
		case 2:
			echo "<h2>Martes</h2>";
			break;
		case 3:
			echo "<h2>Miercoles</h2>";
			break;
		case 4:
			echo "<h2>Jueves</h2>";
			break;
		case 5:
			echo "<h2>viernes</h2>";
			break;
		default:
			echo "<h2>Fin de semana</h2>";
			
		
		
	}


?>

<style type="text/css">
	h1,h2,h3,h4,h5,h6 {
		
		color: brown;
	}
</style>