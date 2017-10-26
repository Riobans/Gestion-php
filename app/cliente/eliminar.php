<?php
ini_set("display_errors",1);
   include("/var/www/html/crm/conexiones/mysql.inc.php");
   
if(isset($_GET['rut_cliente']))
 
    $consultaSql = "DELETE * FROM cliente WHERE rut_cliente='".$_GET['rut_cliente']."' ";
    $resultadoSql= $objetoMYSQL->query($consultaSql)
    


?>