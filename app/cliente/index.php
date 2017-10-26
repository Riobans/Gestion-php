<?php
session_start();
echo "Usuario: ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];
include("../../clases/cliente.class.php");

$obj_cliente = new cliente();
$arrayCliente=$obj_cliente->obtenerClientes();
$arrayCantidadClientes=count($arrayCliente);

?>

<button class="ui button" onclick="location.href='../crm.php'">Volver al inicio</button>

<html>
    <head>
        <title>Listado de Clientes</title>
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../semantic/semantic.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
        <link rel="stylesheet" type="text/css" href="css/estilos.css" >
    </head>
        <body>

        <form class="ui form " name="frm_listado">
        <div class="ui segment">
        <h3 class="ui block header">LISTA DE CLIENTES<i class="list layout icon"></i></h3>  
       <table  style="margin: 0 auto;" class="ui celled table">
       <thead>
       <tr>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rut Cliente</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellidos</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Celular</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fono Fijo</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha Actualizacón</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eliminar</font></font></th>
        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar</font></font></th>
        </tr>
       <thead>
        
        <?php
        $i=0;
        while($i<$arrayCantidadClientes){

        
        ?>
        <tr>
        <td> <?php echo $arrayCliente[$i][0];?></td>
        <td> <?php echo $arrayCliente[$i][1];?></td>
        <td> <?php echo $arrayCliente[$i][2];?></td>
        <td> <?php echo $arrayCliente[$i][3];?></td>
        <td> <?php echo $arrayCliente[$i][4];?></td>
        <td> <?php echo $arrayCliente[$i][5];?></td>
        <td> <?php echo $arrayCliente[$i][6];?></td>

       <td><a href="eliminar-dml.php?rut_cliente=<?php echo $arrayCliente[$i][0]?>">eliminar</a></td>
       <td><a href="actualizar.php?rut_cliente=<?php echo $arrayCliente[$i][0]?>&nombres=<?php echo $arrayCliente[$i][1]?>&apellidos=<?php echo $arrayCliente[$i][2]?>&email=<?php echo $arrayCliente[$i][3]?>&celular=<?php echo $arrayCliente[$i][4]?>&fono_fijo=<?php echo $arrayCliente[$i][5];?>">actualizar</a></td>
       
        <?php
        $i++;
        };?>

        </tr>  
            </table>
        </body>
        <tr><a href="agregar.php" >Agregar Cliente</a></tr>

</html>