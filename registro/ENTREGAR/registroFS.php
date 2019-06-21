<?php


$provincias = [
  "s"=>"San Luis",
  "m"=>"Mendoza",
  "j"=>"San Juan",
  "n"=>"Neuquen"
];

    if($_POST){
      if(empty($_POST["nombre"])){
        echo "Falta ingresar datos de Nombre <br>";
  }
    // strlend es una función que nos ayuda a contar variables dentro de los datos a completar en este caso es el valor 0, si no se completa envia el dato "Falta ingresar datos de Nombre" //
    if(strlen($_POST["usuario"]) <8 ){
  echo "El usuario debe tener al menos 8 caracteres <br>";
    }
    if(is_numeric($_POST["edad"]) == false){
  echo "La edad debe ser numerica <br>";
    }
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL==false)){
  echo "El mail no tiene formato correspondiente <br>";
}}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
        <script
          src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
          integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
          crossorigin="anonymous"></script>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
  </head>

  <body>
    <div class="container" >
      <div class="row justify-content-md-center">
        <div class="col col-lg-2">
        </div>

    <div class="col-md-auto" class="jumbotron"  >
     <h1>Bienvenido al mundo FullService!</h1>
     <p>...</p>
     <p class="row justify-content-md-center"><a  class="btn btn-primary btn-lg" href="#" role="button" class="text-center">Conoce nuestros servicios</a></p>

      </div>
      <div class="col col-lg-2">

      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col col-lg-2">
      </div>
      <div class="col-md-auto" >
   <form class="form-signin">
     <img  class="col-md-auto"   src="ICONO HERALDOII.svg"  alt="" width="72" height="72">

     <h1  class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>

     <label for="inputEmail" class="sr-only">Dirección de mail:</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Dirección de mail" required="" autofocus="">

    <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>
    </div>

    <div class="col col-lg-2">
      </div>
        </div>
    </div>




  </form >

    <form class="text-center"  action="registroFS.php" method="POST">
      <div class="form-group">
        <blockquote class="blockquote text-center">
  <p class="mb-0">REGISTRATE</p>
  <footer class="blockquote-footer">A un paso  <cite title="Source Title"> del EXITO</cite></footer>
</blockquote>
            <label for="disabledSelect">Seleccione su perfil  </label><br>
            <select class="w-20 p-3" class="col-xs-4 col-md-4"id="disabledSelect" class="form-control">
              <option>REGISTRATE GRATIS COMO USUARIO DE SERVICIOS</option>
              <option>PROVEEDOR DE SERVICIOS O PROFESIONAL</option>
            </select>
          </div>
      <div class="w-20 p-3" class="col-xs-4 col-md-4" style="background-color:#eee"  class="form-group" class="p-2"  >
        <label for=""> Nombre: </label><br>
        <input type="text" name="nombre" value="">
        </div>

      <div class="w-100 p-3" class="col-xs-4 col-md-4" style="background-color:#eee" class="form-group" >
        <label for=""> Email:</label><br>
        <input type="text" name="email" value="">
      </div>

      <div class="w-100 p-3" class="col-xs-4 col-md-4" style="background-color:#eee" class="form-group" >
        <label for=""> Repetir Email:</label><br>
        <input type="text" name="email" value="">
      </div>

      <div class="w-100 p-3" class="col-xs-4 col-md-4" style="background-color:#eee"  class="form-group" >
        <label for=""> Edad:</label><br>
        <input type="text" name="edad" value="">
      </div>

      <div class="w-100 p-3" class="col-xs-4 col-md-4" style="background-color:#eee"  class="form-group" >
        <label for=""> Password:</label><br>
        <input class="w-30 p-2" class="form-control" type="password" name="password" value="" placeholder="Password">
      </div>

      <div class="w-100 p-2" class="col-xs-4 col-md-4" style="background-color:#eee"  class="form-group" >
        <label for="">Repetir Password:</label><br>
        <input class="w-30 p-2" class="form-control" type="password" name="password" value="" placeholder="Password">
      </div>

      <div class="w-100 p-3" class="col-xs-4 col-md-4"  style="background-color:#eee" class="form-group" >
        <label for=""> Telefono:</label><br>
        <input type="text" name="Telefono" value="">
      </div>

      <div  class="p-2"  class="w-100 p-3" class="col-xs-4 col-md-4" style="background-color:#eee" class="form-group" >
        <label for =""> Provincia: </label><br>
        <select class="" name="provincia">
        <?php foreach ($provincias as $codigo => $provincia): ?>
            <option value="<?=$codigo?>">
          <?=$provincia?>
        </option>
      <?php endforeach ?>
    </select>
      </div>


      <div class="p-2" class="col-xs-4 col-md-4">
        <input type="submit"  class="col-xs-4 col-md-4" name="submit" value="enviar">
      </div>


    </div>
    </form>
  </body>
