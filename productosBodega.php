<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Web</title>
    <link rel="icon" href="images/icono.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/body.jpg" class="d-block w-100" height="300px">
    </div>
    <div class="carousel-item">
      <img src="images/body2.jpg" class="d-block w-100" height="300px">
    </div>
    <div class="carousel-item">
      <img src="images/body3.jpg" class="d-block w-100" height="300px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

<div class="fixed-top">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" style="color: #eaebf3;" href="Inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: #eaebf3;" href="formularioProductos.php">Registro de Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: #eaebf3;" href="productosBodega.php">Productos en Bodega</a>
        </li>
    </ul>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</header>

<main>
    <?php

        include("BaseDatos.php");

        $transaccion= new BaseDatos();

        $consultaSQL="SELECT * FROM productos WHERE 1";

        $productos=$transaccion->consultarDatos($consultaSQL);

        

    ?>


<div class="container">

<div class="row row-cols-1 row-cols-md-3 mt-3">

    <?php foreach($productos as $producto): ?>
        
        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?php echo($producto["fotoProducto"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title"><?php echo($producto["nombreProducto"])?></h3>
                    <p class="card-text"><?php echo($producto["marcaProducto"])?></p>
                    <p class="card-text"><?php echo($producto["valorProducto"])?></p>
                    <p class="card-text"><?php echo($producto["descripcionProducto"])?></p>
                    <a href="eliminarProductos.php?id=<?php echo($producto["idProducto"]) ?>" class="btn btn-danger">Eliminar</a>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"]) ?>">
                      Editar
                    </button>
                </div>
            </div>
            <div class="modal fade" id="editar<?php echo($producto["idProducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDICIÓN DE PRODUCTOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                                        <div class="form-group">
                                            <label>nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombreProducto"]) ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>marca:</label>
                                            <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marcaProducto"]) ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>valor:</label>
                                            <input type="number" class="form-control" name="valorEditar" value="<?php echo($producto["valorProducto"]) ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>descripcion:</label>
                                            <textarea class="form-control" name="descripcionEditar" rows="3"> <?php echo($producto["descripcionProducto"]) ?> </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name=botonEditar>Editar</button>
                                    </form>       
                                </div>
                            
                            </div>
                          </div>
              </div>
        </div> 
    
    
    
    
    <?php endforeach ?>    

</div>


</div>

</main>

<footer class="text-center footer-style mt-3">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 footer-col">
                <h3>Redes Sociales</h3>
                <ul class="list-inline">
                    <li>
                        <a  target="_blank" href="https://www.facebook.com/" class="btn-social btn-outline"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://www.instagram.com/" class="btn-social btn-outline"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="https://twitter.com" class="btn-social btn-outline"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a  target="_blank" href="#" class="btn-social btn-outline"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    </ul>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Urban Shoes</h3>
                <p>Somos una tienda Web de tenis de las mejores marcas con mas de 5 años en el mercado.</p>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>