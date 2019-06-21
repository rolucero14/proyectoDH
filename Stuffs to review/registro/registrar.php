<?php

require_once("funciones.php");
//La sentencia require_once es idéntica a require excepto que PHP
//verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.

if ($_POST) {
    $errores = [];
    $errores = validarRegistracion($_POST);
      //      Verificamos si hay errores en la validacion
     if (count($errores) == 0) {
       //     Guardamos el usuario en un JSON
       registrarUsuario($_POST);
       //     Redirigir al login
       header("location:login.php");exit;
     }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
    <div class="form">
          <ul class="tab-group">
            <li class="tab active"><a href="registrar.php">Sign Up</a></li>
            <li class="tab"><a href="login.php">Log In</a></li>
          </ul>

          <div class="tab-content">
            <div id="signup">

              <h1>Sign Up for Free</h1>

              <form action="registrar.php" method="POST">

              <div class="top-row">
                <div class="field-wrap">
                  <input type="text" placeholder="First Name *" name="firstName" />
                </div>

                <div class="field-wrap">
                  <input type="text" placeholder="Last Name *"  name="lastName" required autocomplete="off"/>
                </div>
              </div>

              <div class="field-wrap">
                <input type="email" placeholder="Email Address *" name="email"/>
              </div>

              <div class="field-wrap">
                <input type="password" placeholder="Set A Password *" name="pass" />
              </div>
              <div class="field-wrap">
                <input type="password" placeholder="Repeat A Password *" name="repass" />
              </div>
              <input type="submit" name="submit" value="Get Started" class="button button-block">
              </form>
              <?php
              if($_POST){
                foreach ($errores as $error) {
                  echo  "<span class='error'>" . $error . "</span><br>";
                }
              }?>
            </div>

          </div><!-- tab-content -->

    </div> <!-- /form -->
  </body>
</html>
