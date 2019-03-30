<?php


/*
//Condicional IF
    // Estructura 

    if(condicional){
	   instrucciones
	}else{
	    otras instruciones
	}  
*/    

//Ejemplo de el color si es rojo
/*$color = "rojo";


if ($color == "rojo") {
    echo "EL COLOR ES ROJO";
}else{
    echo "El color NO es ROJO";
}*/



/*
//Ejemplo de el color no es rojo

$color = "verde";


if ($color == "rojo") {
    echo "EL COLOR ES ROJO";
}else{
    echo "El color NO es ROJO";
}
*/



/*
//Operadores de comparacion

==    Igual 
===   Identico
!=    Distinto/diferente
<>    Diferente
!==   No identico
<     Menor que
>     Mayor que
<=    Menor o igual que
>=    Mayor o igual que

*/

/*// Ejemplo1 operadores de condición
$year = 2019;

if ($year == 2019) {
	echo "Estamos en el año 2019";
} else{
	echo "No estamos en el año 2019";
}
*/

/*// Ejemplo1-2 operadores de condición

$year = 2020;

if ($year < 2019) {
	echo "Es un año anterior a 2019";
} else{
	echo "Es un año posterior a 2019";
}
*/

/*
// Ejemplo1-3 operadores de condición
$year = 2020;

if ($year != 2019) {
	echo "Es un año diferente a 2019";
} else{
	echo "Estamos en 2019";
}
*/


/*// Ejemplo1-4 operadores de condición
$year = 2019;

if ($year >= 2019) {
	echo "Hola" .'<br>';
	echo "Estamos de 2019 en adelante";
} else{
	echo "Es un año anterior a 2019";
}
*/

/*
// Ejemplo 2
$nombre = "Patricia Mercado";
$edad = 27;
$mayoria_edad = 18;


if ($edad >= $mayoria_edad) {
	echo "<h1>$nombre: es mayor de edad</h1>";
    } else{
 	  echo "<h2>$nombre no es mayor de edad</h2>";
 }
*/


// Ejemplo 3
$nombre = "Patricia Mercado";
$ciudad = "Salvatierra";
$continente = "America";
$edad = 27;
$mayoria_edad = 18;


if ($edad >= $mayoria_edad) {
	echo "<h1>$nombre: es mayor de edad</h1>";

	if ($continente == "America") {
       echo "<h2>Y es de: $ciudad</h2>";
	}else{
		echo "No es de America";
	}
	
 } else{
 	echo "<h2>$nombre no es mayor de edad</h2>";
 }


 echo "<hr>";
/*
// Ejemplo 4-1 

 $dia = 6;

 if ($dia == 1) {
 	echo "Es Lunes";
 } else{
 	if ($dia == 2) {
 		echo "Es Martes";
 	}else{
 		if ($dia == 3) {
 			echo "Es Miercoles";
 		}else{
 			if ($dia == 4) {
 				echo "Es Jueves";
 			}else{
 				if ($dia == 5) {
 					echo "Es Viernes";
 				}else{
 					echo "Es fin de semana";
 				} 

 			}
 		}
 	}

 }
*/

/*//Ejemplo 4-2: uso de else if para no anidar tantos if (ejemplo 4-1)

 $dia = 6;

 if ($dia == 1) {
 	echo "Lunes";
 }elseif ($dia == 2) {
 	echo "Martes"; 	
 }elseif ($dia == 3) {
 	echo "Miercoeles";
 }elseif ($dia == 4) {
 	echo "Jueves";
 }elseif ($dia == 5) {
 	echo "Viernes";
 }else{
 	echo "Es fin de semana";
 }
*/

/*
//Operadores lógicos

&&  AND Y
||  OR  O
!   NOT NO

AND, OR  
*/


//Ejemplo 5: Operadores logicos


 $edad1 = 18;
 $edad2 = 64;
 $edad_oficial = 20;

 if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
 	echo "Esta en edad de trabajar";
 }else{
 	echo "No puede trabajar";
 }

echo "<hr>";
$pais = "Mexico";

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
	echo "En este pais se habla español";
} else{
	echo "No se habla español";
}


echo "<hr>";

//Ejemplo 6: Switch

$dia = 6;

switch ($dia) {
	case 1:
		echo "Lunes";
		break;
		case 2:
			echo "Martes";
			break;
			case 3:
				echo "Miercoles";
				break;
				case 4:
					echo "Jueves";
					break;
					case 5:
						echo "Viernes";
						break;

					default:
					echo "Es fin de semana";

}


//GOTO: se salta lo que hay entre la marca 

GOTO marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

// este código lo agregue para ver como se lo salta el goto 
$pais = "Mexico";

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
	echo "En este pais se habla español";
} else{
	echo "No se habla español";
}
//

marca: 
echo "<h1>Me he saltado 4 echo</h1>";//5 echo con el que agregue arriba


?>