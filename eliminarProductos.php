<?php

//0. recibir el dato del id
$id=$_GET["id"];

//1. objeto
include("BaseDatos.php");
$operacionBD= new BaseDatos();

//2. consulta
$consultaSQL="DELETE FROM productos WHERE idProduct='$id'";

//3. UTILIZAR EL METODO
$operacionBD->eliminarDatos($consultaSQL);



?>