<?php
//Datos de Conexión
$user         = 'root'; //usuario
$password     = ''; //contaseña
$direccion_ip = '127.0.0.1'; //direccion ip
$base_Datos   = 'samec'; //nombre de la base de datos

//cadena de conexion
$conexionBD = mysqli_connect($direccion_ip, $user, $password);
/*cadena de coneccion en todos los lenguajes
direccion ip -> usuario -> contaseña -> base de datos a utilizar
 */

//Seleccion de la base de datos
mysqli_select_db($conexionBD, $base_Datos);

//acentos en la Base de datos
$conexionBD->set_charset("UTF8");
