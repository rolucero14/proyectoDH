<?php
session_start();
//Validar datos
function validarRegistracion($datos) {
    $errores = [];
    //Recibimos en variables los campos del registro
    //Con trim quitamos espacios en blanco al inicio y final
    $firstName = trim($datos['firstName']);
    $lastName = trim($datos['lastName']);
    $email = trim($datos['email']);
    $pass = trim($datos['pass']);
    $repass = trim($datos['repass']);
    $patron1 = ("/^[a-z]+$/i"); //Expresión regular para solo caracteres

    if( $firstName == '' || !preg_match($patron1, $firstName) || $lastName == '' || !preg_match($patron1, $lastName) || $email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $pass == "" || $repass == "" || ($pass != $repass) ||
    count(buscarUsuarioPorEmail($email)) != 0){
    $errores = [
        "error" => "Please enter valid data for registration"
      ];
    }

    //verificar email no este repetido.

    //   $errores = [
    //     "duplicado" => "This" . $email . "exists."
    //   ];
  return $errores;
}

function validarLogin($datos) {

  $errores = [];
    //1- Verifico que email este guardado
    $usuario = buscarUsuarioPorEmail($datos["email"]);
    if (count($usuario) > 0) {
    // 2- Validar el pass, ojo esta con hash!
      if (password_verify($datos["pass"], $usuario["pass"]) == false) { //Comprueba que la contraseña coincida con un hash
        $errores["email"] = "Los datos son incorrectos, por contrasenia";
      }
  } else {
    $errores["email"] = "Los datos son incorrectos";
  }

  return $errores;
}

// function validarTipoArchivo($mTipo) {
//   $errores = [];
//   echo  $mTipo;
//   if (($mTipo != "image/jpeg") && ($mTipo != "image/png")){
//     $errores["error"] = "Formato de archivo no reconocido." ;
//     return $errores;
//   }
//   return [];
// }

function registrarUsuario($datos) {
  $usuario = armarUsuario($datos);
  persistirUsuario($usuario);
}

function armarUsuario($datos) {
  return [
    "firstName" => ucfirst($datos["firstName"]), //ucfirst — Convierte el primer caracter de una cadena a mayúsculas
    "lastName" =>  ucfirst($datos["LastName"]),
    "email" => $datos["email"],
    "pass" => password_hash($datos["pass"], PASSWORD_DEFAULT), //Crea un hash de contraseña
    "avatar" => ""
  ];
}

//Guardar Datos

function persistirUsuario($usuarioNuevo) {
  $usuariosGuardados = buscarUsuarios();

  $usuariosGuardados[] = $usuarioNuevo;

  $usuariosJSON = json_encode($usuariosGuardados);

  file_put_contents("usuarios.json", $usuariosJSON);
}


function updateAvatar($fichero_subido, $usuarioLogueado){
  $usuarios = buscarUsuarios();
  foreach($usuarios as $key => $question){//agregar comment porque se hace asi
    if ($usuarios[$key]["email"] == $usuarioLogueado["email"]) {
      $usuarios[$key]['avatar'] = $fichero_subido;
    }
  }

  $usuariosJSON = json_encode($usuarios);

  file_put_contents("usuarios.json", $usuariosJSON);
  $usuarioLogueado["avatar"] = $fichero_subido;
  return $usuarioLogueado;
}
//Buscar datos

function buscarUsuarios() {
  //cargar el json
  $archivo = file_get_contents("usuarios.json");

  if ($archivo == "") {
    return [];
  }

  $usuarios = json_decode($archivo, true);

  return $usuarios;
}

function buscarUsuarioPorEmail($email) {
  $usuarios = buscarUsuarios();

  foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }

  return [];
}


function buscarUsuarioLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return buscarUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  }
  return [];
}


//LOGIN
function estaLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return true;
  }
  else {
    return false;
  }
}

function loguearUsuario($email) {
  $_SESSION["usuarioLogueado"] = $email;
  echo "usuario loguado";
}
function logoutUser(){
  session_destroy();
   header("location:login.php");exit;
}
 ?>
