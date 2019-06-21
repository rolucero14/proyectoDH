<?php

require_once("funciones.php");

    $msgs = [];
    if(isset($_POST["logout"]) && !$_FILES) {
      logoutUser();
    }
    $usuarioLogueado = buscarUsuarioLogueado();

    if(isset($_POST)  && $_FILES){
    $dir_subida = 'archivos/';
    // basename() Devuelve el último componente de nombre de una ruta
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

//La función _move_uploaded_file() moverá el archivo temporal a una carpeta
      if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
          $usuarioLogueado = updateAvatar($fichero_subido, $usuarioLogueado);
          $msgs["ok"] = "El fichero es válido y se subió con éxito.";
      } else {
         $msgs["error"] =  "¡Posible ataque de subida de ficheros!\n";
      }

    //recomendar ver https://diego.com.es/seguridad-en-la-subida-de-archivos-en-php
  // echo 'Más información de depuración:';
  //   print_r($_FILES);
  //
  //   print "</pre>";
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
      <?php if(estaLogueado()) {//comentar
        echo "<form  action='perfil.php' method='POST'><input type='hidden' name='logout'/><input type='submit' value='Logout' class='button button-block' /> </form>";
      } ?>
      <h1>Welcome <?php echo $usuarioLogueado["firstName"] ?>!</h1>
      <ul class="tab-group">
        <li class="tab active">
          <?php echo  "<img src='". $usuarioLogueado["avatar"] ."'>" ?>
          </li>
        <li class="tab">
          <form enctype="multipart/form-data" action="perfil.php" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />

            <input name="fichero_usuario" type="file" id="nuestroinput"  />

           <input type="submit" value="Update Avatar" class="button button-block" />
        </form></li>

      </ul>
    </div>
    </div>
  </body>
</html>
