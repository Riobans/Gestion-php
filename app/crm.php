
<?php
session_start();
echo "Usuario: ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];

?>
<html>
<head>
<title>Opciones</title>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css" >
</head>
<body>
<div class="ui segment">
<h3 class="ui block header">Selecione una opción: <i class="user icon"></i></h3> 
    <table>
      <div class="ui text container">
         <td><div><button class="ui button" onclick="location.href='gestiones/index.php'">Listar Gestiones</button></div></td>
         <td><div><button class="ui button" tabindex="0" onclick="location.href='cliente/index.php'">Gestionar Clientes</button></div></td>
         <td><div><button class="ui button" tabindex="1" onclick="location.href='tipoGestion/index.php'">Tipos de Gestión</button></div></td>
      </div>

    </table>
</body>
</html>    
