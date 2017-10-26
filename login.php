<?php 
//se inician las variables de session
session_start();
//mostrar errores por pantalla
ini_set("display_errors",1);
//se incluye clase <seguridad class="class php
include("clases/seguridad.class.php");
include("clases/usuario.class.php");
//se crea objeto de clase seguridad
$obj_seguridad  = new seguridad();
$obj_usuario    = new usuario();

$var_email = $_POST["email"];
$var_clave = $_POST["clave"];


//invocamos metodos para verificar accesos

$var_resultado  = $obj_seguridad->verificarUsuarioClave($var_email,$var_clave);


if($var_resultado==1){
  
  $var_datos_usuario    =   $obj_usuario->obtenerDatosUsuario($var_email);
  $var_rut              =   $var_datos_usuario[0][0];
  $var_nombres          =   $var_datos_usuario[0][1];
  $var_apellidos        =   $var_datos_usuario[0][2];

  //creamos variables de sesion con los datos obtenidos
  $_SESSION["ses_rut_usuario"]       =    $var_rut;
  $_SESSION["ses_nombres_usuario"]    =   $var_nombres;
  $_SESSION["ses_apellidos_usuario"]  =   $var_apellidos;
  //Redireccionamos
 header("Location:app/crm.php");
}else{
    header("Location:index.php");

}


?>