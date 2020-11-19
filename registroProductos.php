<?php

include("BaseDatos.php");

if(isset($_POST["btn"])){

    $nombre_product=$_POST["nombreProducto"];
    $marca_product=$_POST["marcaProducto"];
    $precioProducto=$_POST["precioProducto"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];

   // echo($nombre_product."-".$marca_product."-".$precioProducto."-".$descripcion);

    //crear objeto

    $operacionBD= new BaseDatos();
    //$operacionBD->conectarBD();

    //consulta
    $consultaSQL= "INSERT INTO productos(nombreProduct,marcaProduct,precioProduct,descripcionProduct, foto) VALUES ('$nombre_product', '$marca_product', '$precioProducto', '$descripcion', '$foto')";

    //llamar al metodo agregarDatos
   $operacionBD->agregarDatos($consultaSQL);

    
}





?>