<?php
session_start();
echo "Usuario: ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];
include("../../clases/gestion.class.php");

$obj_gestion = new gestion();
$arrayGestiones=$obj_gestion->obtenerGestiones();
$arrayCantidadGestiones=count($arrayGestiones);

?>

<button class="ui button" onclick="location.href='../crm.php'">Volver al inicio</button>

<html>
    <head>
        <title>Listado de Gestiones</title>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
     <!--   <link rel="stylesheet" type="text/css" href="../../css/estilos.css" > -->
    </head>
        <body>
       
        <hr>
        
        <form class="ui form " name="frm_listado" >
        <div class="ui segment">
        <h3 class="ui block header">LISTA DE GESTIONES<i class=></i></h3> 
       <table  class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Usuario</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Cliente</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipo Gestion</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resultado Gestión</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comentarios</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha Actualización</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eliminar</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar</font></font></th>
        
        </tr>
       <thead>
        
        <?php
        $i=0;
        while($i<$arrayCantidadGestiones){

        
        ?>
        <tr>
        <td> <?php echo $arrayGestiones[$i][0];?></td>
        <td> <?php echo $arrayGestiones[$i][1];?></td>
        <td> <?php echo $arrayGestiones[$i][2];?></td>
        <td> <?php echo $arrayGestiones[$i][3];?></td>
        <td> <?php echo $arrayGestiones[$i][4];?></td>
        <td> <?php echo $arrayGestiones[$i][5];?></td>
        <td> <?php echo $arrayGestiones[$i][6];?></td>
       

        <td><a href="eliminar-dml.php?id_gestion=<?php echo $arrayGestiones[$i][0]?>">eliminar</a>
        <td><a href="actualizar.php?id_gestion=<?php echo $arrayGestiones[$i][0] ;?>&rut_usuario=<?php echo $arrayGestiones[$i][1]  ;?>&rut_cliente=<?php echo $arrayGestiones[$i][2]  ;?>&tipo_gestion=<?php echo $arrayGestiones[$i][3]  ;?>&resultado_gestion=<?php echo $arrayGestiones[$i][4]  ;?>&comentarios=<?php echo $arrayGestiones[$i][5]  ;?>">Actualizar</a></td>
        
        
        <?php
        $i++;
        };?>

        </tr>
        
        
    
     
        </table> 
        </form> 
        </body>
        <tr><a href="agregar.php" >Agregar Gestión</a></tr>
        </html>