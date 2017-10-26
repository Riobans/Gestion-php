<?php
session_start();
echo "Usuario: ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];
include("../../clases/tipoGestion.class.php");

$obj_tipo_gestion = new tipoGestion();
$arrayTipoGestion=$obj_tipo_gestion->obtenerTipoGestion();
$arrayCantidadTipoGestion=count($arrayTipoGestion);


?>
<tr>

<button class="ui button" onclick="location.href='../crm.php'">Volver al inicio</button>

<html>
    <head>
     
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
    </head>

    <body>
   
    <hr>
    <form class="ui form " name="frm_listado">
     <div class="ui segment">
     <h3 class="ui block header">Tipos de gestión.<i class="list layout icon"></i></h3> 
       <table class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID Tipo Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre Tipo Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de Registro</font></font></th>
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></th>
       </tr>
       <thead>
       <?php
        $i=0;
        while($i<$arrayCantidadTipoGestion){

        
        ?>
        <tr>
        <td> <?php echo $arrayTipoGestion[$i][0];?></td>
        <td> <?php echo $arrayTipoGestion[$i][1];?></td>
        <td> <?php echo $arrayTipoGestion[$i][2];?></td>
        
       <td><a href="eliminar.php?id_tipo_gestion=<?php echo $arrayTipoGestion[$i][0]?>">Eliminar</a></td>
       <td><a href="actualizar.php?id_tipo_gestion=<?php echo $arrayTipoGestion[$i][0]?>&nombre_tipo_gestion=<?php echo $arrayTipoGestion[$i][1];?>">Actualizar</a></td>
       </tr>
       
        <?php
        $i++;
        };?>
    </body>
    <tr><a href="agregar.php" >Agregar Tipo gestión</a></tr>
</html>
