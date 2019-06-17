<?php

$provincias = [
  "s"=>"San Luis",
  "m"=>"Mendoza",
  "j"=>"San Juan",
  "n"=>"Neuquen"
];

  if($_POST){
    if(strlend($_POST["nombre"])==0){
    echo "Falta ingresar datos de Nombre <br>";
    }
    // strlend es una función que nos ayuda a contar variables dentro de los datos a completar en este caso es el valor 0, si no se completa envia el dato "Falta ingresar datos de Nombre" //

    if(strlend($_POST["usuario"]) <8 ){
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
  </head>

  <body>
    <form class="" action="registroPI.php" method="POST">

      <div class="">
        <label for=""> Nombre:</label>
        <input type="text" name="nombre" value="">
      </div>

      <div class="">
        <label for=""> Usuario:</label>
        <input type="text" name="usuario" value="">
      </div>

      <div class="">
        <label for=""> Email:</label>
        <input type="text" name="email" value="">
      </div>

      <div class="">
        <label for=""> Repetir Email:</label>
        <input type="text" name="email" value="">
      </div>

      <div class="">
        <label for=""> Edad:</label>
        <input type="text" name="edad" value="">
      </div>

      <div class="">
        <label for=""> Password:</label>
        <input type="password" name="password" value="">
      </div>

      <div class="">
        <label for="">Repetir Password:</label>
        <input type="password" name="password" value="">
      </div>

      <div class="">
        <label for=""> Telefono:</label>
        <input type="text" name="Telefono" value="">
      </div>

      <div  class="">
        <label for =""> Provincia: </label>
        <select class="" name="provincia">
        <?php foreach ($provincias as $codigo => $provincia): ?>
            <option value="<?=$codigo?>">
          <?=$provincia?>
        </option>
      <?php endforeach ?>
    </select>
      </div>

      <div class="">
        <input type="submit" name="submit" value="enviar">
      </div>

    </form>
  </body>
