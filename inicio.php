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
  <div class="row mt-3">
    <div class="col-sm">
    <img src="images/Urban.jpg" height="100%" width="100%">
    </div>

    <div class="col-sm" > 
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ymEurct2hIk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
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
            <div class="col-md-4 footer-col mt-3">
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