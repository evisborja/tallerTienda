<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="fondo">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="index.html">
        <img src="img/extraterrestre.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        SATURNS
      </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Ingreso Productos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listadoProductos.php">Listado</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

    <div class="container">
        <br>
        <br>
            <form class="mt-5 formulario" method="POST" action="registroProductos.php">
                <h1 class="text-white text-center tit">INGRESO DE PRODUCTOS</h1>
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class=" borde2 ph-center Text" placeholder="Producto" name="nombreProducto">
                    </div>
                    <div class="col">
                        <input type="text" class="borde2 ph-center Text" placeholder="Marca" name="marcaProducto">
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <input type="number" class="borde ph-center Text" placeholder="Precio" name="precioProducto">
                    </div> 
                    
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-group">
                            <textarea class="borde3 ph-center Text" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="borde ph-center Text" placeholder="Foto" name="foto">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-block mt-3 botonRadio" name="btn">Registrar</button>
            </form>
            
        </div>

    </main>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>