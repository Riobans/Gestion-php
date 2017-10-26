<?php 
ini_set("display_errors",1);
include("/var/www/html/crm/conexiones/mysql.inc.php");

if(isset($_GET['id_tipo_gestion']))

 $consultaSql = "DELETE * FROM tipo_gestion WHERE id_tipo_gestion='".$_GET['id_tipo_gestion']."' ";
 $resultadoSql= $objetoMYSQL->query($consultaSql)
}
?>