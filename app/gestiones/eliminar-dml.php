<?php
ini_set("display_errors",1);
include("../../clases/gestion.class.php");
   $obj_gestion = new gestion();
   $var_id_gestion = $_GET["id_gestion"];

   $var_resultado = $obj_gestion->eliminarGestion($var_id_gestion);
   if($var_resultado==1){
     echo "gestion  eliminada";
   }else{
    echo "no se puede eliminar gestión";
  
   }

    


?>