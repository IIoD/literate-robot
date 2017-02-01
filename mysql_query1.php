<?php

// Datos de conexión 

$db_host = "localhost";
$db_nombre = "pruebas";
$db_usuario = "root";
$db_contra = "";

// Abrir la conexion, POO 




// Abrir la conexion por Procedimientos, "Antiguo"

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre); // Se puede prescindir dle ultimo parametro

// Manejo de expección al conectar con la BBDD
if(msql_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit(); // Sale del codigo para que no ejecute mas codigo
}

mysqli_select_db($conexion, $db_nombre) or die ("No de encuentra la base de datos"); // Seleccion el base de datos

mysqli_set_charset($conexion, "utf8"); // Utiliza el utf8 para caracteres latinos


// Realizar Consulta o "Query"
$query = "SELECT * FROM DATOSPERSONALES"; // Toda la base de datos DATOSPEROSNALES con el *

$resultados = msqli_query($conexion, $query);  // Crea una tabla en memoria con toda la infromacion existente en $query

// Leer todos los registros de la tabla. 

while(($fila = mysqli_fetch_row($resultados)) == true){   // Recorre fila a fila la tabla y lo guarda en un Array siempre que tenga TRUE

echo $fila[0]; .""  // Pasa por pantalla la posicion 0.
echo $fila[1]; .""  // Pasa por pantalla la posicion 0.
echo $fila[2]; .""  // Pasa por pantalla la posicion 0. 

echo "<br>";
}

// Cerrar la conexion
mysqli_close($conexion);










?>