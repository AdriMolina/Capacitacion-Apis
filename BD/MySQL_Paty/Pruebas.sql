 /*muestra tabla carrera */
select * from carrera;
/*muestra solo unas columnas de la tabla carrera */
select Cnocarrera, Cnombre from carrera;

/*Columnas calculadas: mostrar materias, el costo del laboratorio y coperacion*/
select Mnombre, Mcostolab, Mcostolab * .10 from materia;

/*Columnas constantes: Reporte*/

select 'La materia', Mnombre, 'tiene', Mcred, 'créditos' from materia;

/*Eliminar filas duplicadas: Distinct*/

select Mnombre, Mnocarrera from materia;

    select Mnocarrera from materia;

         select distinct Mnocarrera from materia;
         
         
/*Clausula WHERE: Obtener materias con el costo de laboratorio de $100 */  
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
     where Mcostolab = 100; 
     
/*Clausula WHERE: seleccionar materias, carrera y costo de laboratorio donde su costo sea menor a $100*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
     where Mcostolab < 100; 

/*Clausula WHERE: seleccionar materias, carrera y costo de laboratorio donde su costo sea mayor o igual a $100*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
     where Mcostolab >= 100;      
     
 /*Clausula de rango Between: Obtener el nombre del curso y el costo de laboratorio donde su costo sea entre 100 y 200 y que incluya valores de 100 y 200  */
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
     where Mcostolab BETWEEN 100 AND 200;  
     
  /*Otra forma de escribir lo anterior: sin between*/   
 select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
     where Mcostolab >= 100 AND Mcostolab <=200;  

 /*NOT Between: Obtener nombre de materia y costo de laboratorio de todos los cursos con costo de laboratorio menor de 100 o mayor de 200  */
 select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
 where Mcostolab NOT BETWEEN 100 AND 200;  
 
 /*Between: Rango de cadenas de caracteres*/
  /*Obtener materias que empiecen con B,C o D*/
 select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia 
 where Mnombre BETWEEN 'B' AND 'D'; 
 
/*Predicado de pertenencia a un conjunto IN: Seleccionar número de curso, nombre y los creditos para los cursos 
que tengan 8 y 10 creditos*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia
where Mcred IN (10, 8);

/*NOT IN: seleccionar cursos que tengan creditos diferentes de 8 y 10*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia
where Mcred NOT IN (10, 8);

/*Predicado de correspondencia con un patron LIKE: comodin % */
/*Materias que en sus titulos tengan la palabra Maquina*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab
from materia
where Mnombre LIKE '%Maquina%';

/*Predicado de correspondencia con un patron LIKE: comodin % */
/*Materias que en sus titulos tengan la palabra Maquina*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab
from materia
where Mnombre LIKE '%Maquina%';

/*Predicado de correspondencia con un patron LIKE: comodin _ unico */
/*Materias que en sus titulos tengan la palabra Maquina*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab
from materia
where Mnombre LIKE '%M_quina%';

/*Predicado de correspondencia con un patron NOT LIKE*/
/*Mostrar Materias que no tengan una I en la segunda posición*/
select * from materia;

select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab
from materia
where Mnombre NOT LIKE '_I%';

/*Predicado de valor nulo : IS NULL*/
/*Encontrar grupos que no tiene un maestro asignado*/
select * from grupo;

select Gnogrupo, Gnomateria, Gnomaestro, Gdias, Gsalon from grupo
where Gnomaestro IS NULL;

/*Forma negada de valor nulo: IS NOT NULL*/
/*Encontrar grupos que ya tienen asignado un profesor*/
select * from grupo
where Gnomaestro IS NOT NULL;

/*Predicados compuestos: AND, OR y NOT */
/*Obtener información de los cursos de las carreras de Electrica y Computación*/
select Mnomateria, Mnombre, Mcred, Mnocarrera from materia
where Mnocarrera = '32'
      OR Mnocarrera = '38';
      
/*encontrar la información de todas las materias de computación donde el laboratorio cueste más de $100*/
select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia
where Mnocarrera ='32'
		    AND Mcostolab > 100;

/*obtener el número, nombre y carrera de las materias que no sean de computación */            
select Mnomateria, Mnombre, Mnocarrera from materia
where  NOT Mnocarrera ='32';

/*Clausula ORDER BY: Ascendente o descendente */
/*Visualizar toda la tabla de materia y ordenar los resultados en
forma ascendente por el costo del laboratorio*/
select * from materia;
 
 select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia
 ORDER BY Mcostolab; 

/*Visualizar toda la tabla de materia y ordenar los resultados en
forma descendente por el costo del laboratorio y nombre de materia*/

 select * from materia;
 
 select Mnomateria, Mnombre, Mcred, Mnocarrera, Mcostolab from materia
 ORDER BY Mcostolab DESC, Mnombre DESC; 
 
 /*ORDEN BY: Número de la columna para ordenar en lugar de nombre*/
/*listar la clave de la materia, su nombre y su costo aumentado 10%*/
/*ordenar en orden descendente por el costo del laboratorio aumentado en un 10 por ciento.*/
select Mnomateria, Mnombre, Mcostolab * 1.10 from materia
 ORDER BY 3;
 
 /*otra forma de llamar toda las tabla*/
 select Cnocarrera, Cnombre from carrera;
 
 select carrera.cnocarrera, carrera.cnombre from carrera
 where carrera.cnocarrera = 32;
 
 /*otra formma de llamar toda la tabla*/
 select materia.* from materia;
 
/*Alias de tablas: cambiar el nombre de una tabla durante una consulta */

select M.mnomateria, M.mnombre from Materia M 
Where m.mnomateria = '0076';

 
 /*Consultas multitablas: JOIN*/
/*Padre e hijo: Obtener numero de materia, nombre de materia, nummero de carrera y nombre de la carrera*/
select * from carrera;

Select Mnomateria, Mnombre, Mnocarrera, Cnombre from materia, carrera
where Cnocarrera = Mnocarrera;

/*Operador JOIN: INNER JOIN */
 
 Select Mnomateria, Mnombre, Mnocarrera, Cnombre 
 from materia INNER JOIN Carrera
 ON Cnocarrera = Mnocarrera;
 
 select * from grupo;
 select * from academic;
 
 select Gnomateria, Gnomaestro, Anombre
    From academic INNER JOIN grupo
    ON Anoemplead = Gnomaestro;
    
/*Operador JOIN: OUTER JOIN */  
  -- Tenemos 10 materias -- 
  select * from materia;
  
  -- Tenemos 7 grupos --
  select * from grupo;
  
  -- Generar un reporte de todas las materias con su grupo o clase asignada y --
  -- incluir las materias que no tienen grupo asignado --
  
 /*Con INNER JOIN*/
 -- muestra solo las materia asignadas --
 select Gnogrupo, Mnombre, Mcred
    From materia as m INNER JOIN grupo as g 
    ON m.Mnomateria = g.Gnomateria;

/*Con LEFT OUTER JOIN*/
-- Muestra todas las materias --
select Gnogrupo, Mnombre, Mcred
    From materia as m LEFT OUTER JOIN grupo as g 
    ON m.Mnomateria = g.Gnomateria;

/*Con RIGHT OUTER JOIN*/
-- Muestra todas las materias a la derecha --	
select Gnogrupo, Mnombre, Mcred
    From grupo as g RIGHT OUTER JOIN materia as m
    ON m.Mnomateria = g.Gnomateria;	 
    
/*JOIN con criterio de selccion*/
-- Mostrar los grupos de la carrera de computación --
    select Gnogrupo, Mnombre, Mcred, Mnocarrera
    From grupo as g RIGHT OUTER JOIN materia as m
    ON m.Mnomateria = g.Gnomateria
    where Mnocarrera = 32;
    
    /*JOIN con criterio de selccion*/
-- Mostrar el nombbre de la carrera --
select Gnogrupo, Mnombre, Mcred, Mnocarrera, Cnombre
    From grupo as g RIGHT OUTER JOIN materia as m
    ON m.Mnomateria = g.Gnomateria
    INNER JOIN carrera ON Mnocarrera = Cnocarrera
    where Mnocarrera = 32;


/*Operador UNION*/
-- Listar todos los alumnos y todos los maestros --

-- Seleccionar todos los números y nombres de los maestros, marcarlos con 'A' --
Select Anoemplead, Anombre, 'A'
from academic;     

-- Seleccionar todos los numeros de cuenta y los nombres, marcarlos con 'E' )
     select sun(Mcostolap) from materia;
     
/*Operador AVG*/
-- Obtener el valor promedio de todos los costos de Labaoratorio

select avg(Mcostolap) from materia;


/*Operador COUNT (*)  */
-- Encontrar cuantas materias de computacion existen --
select count(*) from materia 
where Mnocarrera = 32;

/*DISTINCT*/
-- Cuantas carreras diferentes hay en la tabla de materia --

select count(distinct Mnocarrera) from materia 
where Mnocarrera = 32;


/*GROUP BY*/

-- Para cada una de las carreras obtener 
-- el promedio del cost0 de todos sus laboratoriso --
select Mnocarrera, avg(mcostolab)
From Materia
GROUP BY Mnocarrera;

/*Para cada materias: Determinar la suma de los costos de laboratorio 
que tengan 8 créditos y visualizar la salida en forma descendente 
por el número de carrera */

select Mnocarrera, sum(mcostolab)
From Materia
where Mcred = 8 
GROUP BY Mnocarrera
ORDER BY Mnocarrera desc;


-- Para comprobar --
select * from materia where mcred = 8;


/*listar el máximo costo de laboratorio agrupados por el número de créditos y separando
las diferentes carreras para esto seleccionamos el número de créditos el número de carrera y el máximo
costo por laboratorio de la tabla de materia y los vamos a agrupar por número de créditos y también
por número de carrera seleccionamos y ejecutamos
en los resultados.*/

select materia.Mcred, materia.Mnocarrera,
max(Materia.mcostolab)
from materia
 GROUP BY materia.Mcred, materia.Mnocarrera;
 
 /*Clausula Havin*/
 /*Obtener el numero de la carrera y el valor promedio del osto */
select Mnocarrera, avg(mcostolab)
from materia
 GROUP BY Mnocarrera
 HAVING avg(mcostolab)> 100;
 
 

select mnocarrera, AVG (mcostolab)
from materia
where mcostolab > 0 
 GROUP BY Mnocarrera
 HAVING AVG(mcostolab)> 100;
 
 
/*Subconsultas*/
-- ejemplo por separado --
-- Calcular el maximo de laboratorio
select max(mcostolab)
from materia;
 
 -- calcular el nombre con el valor que ya encontramos
 Select Mnocarrera,Mnombre
 from materia
 where Mcostolab = 500;
 
-- Ejemplo con subconsultas --  
 Select Mnocarrera,Mnombre
 from materia
 where Mcostolab = (select max(mcostolab)
from materia);


 /*Seleccionar el número, el nombre y la tarifa de cualquier curso que tenga una
tarifa mayor o igual al 5 por ciento del sueldo de cualquier maestro */
 select Mnomateria, Mnombre, mcostolap
 from materia
 where mcostolab = 500;    


/*donde el costo de laboratorio sea igual a 500 lo ejecutamos
y es microcomputadora*/

select Mnocarrer, Mnombre
 from materia
 where mcostolab =500;


     

     



