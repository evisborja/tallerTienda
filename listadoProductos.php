<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">REGISTRO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Registro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listadoProductos.php">Listado</a>
                    </li>
                </ul>
            </div>
        </nav>

</header>

<main>
    <?php 
        //Consultar datos
        //1. Incluir el archivo BaseDatos
        include("BaseDatos.php");

        //2. Crear una copia o objeto de la BaseDatos
        $operacionBD=new BaseDatos();

        //3. Crear una consulta para BUSCAR en SQL
        $consultaSQL="SELECT * FROM `productos` WHERE 1";

        //4. Almacenar la respuesta de la consula (ejecutando la consulta)
        $productos=$operacionBD->consultarDatos($consultaSQL);

        
    ?> 

<div class="container">
    
    <div class="row row-cols-1 row-cols-md-3 mt-5">

        <?php foreach($productos as $producto):?>

            <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($producto["nombreProduct"])?></h5>
                        <p class="card-text"><?php echo($producto["descripcionProduct"])?></p>
                        <a href="eliminarProductos.php?id=<?php echo($producto["idProduct"]) ?>" class="btn btn-danger">ELIMINAR</a>
                    </div>
                </div>
            </div>


        <?php endforeach?>

    </div>


</div>
</main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>