<?php 
ini_set("display_errors",1);
include("../../clases/tipoGestion.class.php");
   $obj_tipo_gestion = new tipoGestion();
   $var_id_tipo_gestion = $_GET["id_tipo_gestion"];

   $var_resultado = $obj_tipo_gestion->eliminarTipoGestion($var_id_tipo_gestion);
   if($var_resultado==1){
     echo "Tipo de gestion eliminada.";
   }else{
    echo "Hay un error al eliminar";
  
   }
?>