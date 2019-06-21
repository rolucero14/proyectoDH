<?php
require_once("funciones.php");

$errores = [];

if (estaLogueado()) {
  header("location:perfil.php");exit;
}

if($_POST) {

  $errores = validarLogin($_POST);

  if (count($errores) == 0) {
    loguearUsuario($_POST["email"]);
    header("location:perfil.php");exit;
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="form">
    <div id="login">
      <h1>Welcome Back!</h1>
      <form action="login.php" method="post">
        <div class="field-wrap">
          <input type="email" placeholder="Email Address" name="email"/>
        </div>

        <div class="field-wrap">
          <input type="password" placeholder="Password" name="pass"/>
        </div>

        <p class="forgot"><a href="#">Forgot Password?</a></p>

        <input type="submit" name="submit" value="Log In" class="button button-block">
      </form>
      <?php
      if($_POST){
        foreach ($errores as $error) {
          echo  "<span class='error'>" . $error . "</span><br>";
        }
      }?>
    </div>
    </div>
  </body>
</html>
