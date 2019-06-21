<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../Proyecto Integrador\css\index.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title></title>
</head>
  <body>
<header>
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img id="logo" src="imgs\logo.png" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="text_color nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="text_color nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="productos.php">Productos</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="text_color nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="faq.php">FAQ</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="text_color nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="text_color nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login_registro.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
  <div class="dropdown_opt_serv">
    <div class="dropdown">
      <img class="ban_icon" src="imgs\banner_icons\clean_house.png" alt="casas">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Servicios para tu hogar
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Plomeria</a>
    <a class="dropdown-item" href="#">Albañileria</a>
    <a class="dropdown-item" href="#">Service Electrodomestico</a>
    <a class="dropdown-item" href="#">Gasista</a>
    <a class="dropdown-item" href="#">Carpinteria</a>
    <a class="dropdown-item" href="#">Electricidad</a>
    <a class="dropdown-item" href="#">Refrigeracion</a>
    <a class="dropdown-item" href="#">Otros Servicios</a>
  </div>
</div>
<br>
<div class="dropdown">
  <img class="ban_icon" src="imgs\banner_icons\subcontratacion.png" alt="casas">
<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Servicios para tu Empresa
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Plomeria</a>
<a class="dropdown-item" href="#">Albañileria</a>
<a class="dropdown-item" href="#">Service Electrodomestico</a>
<a class="dropdown-item" href="#">Gasista</a>
<a class="dropdown-item" href="#">Carpinteria</a>
<a class="dropdown-item" href="#">Electricidad</a>
<a class="dropdown-item" href="#">Refrigeracion</a>
<a class="dropdown-item" href="#">Otros Servicios</a>
</div>
</div>
  </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\albanileria.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\electricista.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\carpinteria.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\gas.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\serv_domestico.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\pintor.jpg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Proyecto Integrador\imgs\main_carousel\plomeria.jpg" alt="Seventh slide">
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

<h2>- NUESTROS SERVICIOS -</h2>
<section class="productos">
  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>

  <button id="prods" type="button" name="button" onclick="">
    <img src="../Proyecto Integrador\imgs\products\producto.jpg" alt="">
  </button>
</section>


</main>


<footer class="text_color footer text-center">
  <div class="container">
    <div class="row">

      <!-- Footer Ubicacion -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Ubicacion</h4>
        <p class="lead mb-0">Somewhere in the rainbow
          <br>Mendoza, MZA</p>
      </div>

      <!-- Footer redes sociales -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-facebook-f">Icono</i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-twitter">Icono</i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-linkedin-in">Icono</i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="#">
          <i class="fab fa-fw fa-dribbble">Icono</i>
        </a>
      </div>

      <!-- Footer Sobre nosotros/contacto -->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">Sobre Nosotros</h4>
        <p class="lead mb-0">FullService a tu servicio</p>
      </div>

    </div>
  </div>
</footer>
  </body>
</html>
