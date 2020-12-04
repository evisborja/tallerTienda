<?php

include("BaseDatos.php");

if (isset($_POST["botonEditar"]))
{
    $id=$_GET["id"];
    
    $producto=$_POST["productoEditar"];
    $descripcion=$_POST["descripcionEditar"];

    $operacionBD= new BaseDatos();

    $consultaSQL="UPDATE productos SET nombreProduct='$producto',descripcionProduct='$descripcion' WHERE idProduct='$id'";

    $operacionBD->actualizarDatos($consultaSQL);
}





?>