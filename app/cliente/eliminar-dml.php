<?php
ini_set("display_errors",1);
include("../../clases/cliente.class.php");
   $obj_cliente = new cliente();
   $var_rut_cliente = $_GET["rut_cliente"];

   $var_resultado = $obj_cliente->eliminarCliente($var_rut_cliente);
   if($var_resultado==1){
     echo "cliente eliminado";
   }else{
    echo "El cliente tiene una gestion asociada";
  
   }

    


?>