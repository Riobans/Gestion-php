<?php
ini_set("display_errors", 1);

$var_id_gestion          = $_GET["id_gestion"];
$var_rut_usuario         = $_GET["rut_usuario"];
$var_rut_cliente         = $_GET["rut_cliente"];
$var_tipo_gestion        = $_GET["tipo_gestion"];
$var_resultado_gestion   = $_GET["resultado_gestion"];
$var_comentarios         = $_GET["comentarios"];

?>

<html>
<head>
<title>actualizar</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
</head>

<body>
<!--<div class="ui disabled input">-->
<form class="ui form"name="frm_actualizar" action="actualizar-dml.php" method="post">
<div class="ui segment">
<h3 class="ui block header">ACTUALIZAR GESTION<i class="list layout icon"></i></h3>  
<table>

<tr>
<td><label>ID gestión</label></td>
<td><input type="text" name="txt_id_gestion" value="<?php echo $var_id_gestion;?>"></td>
</tr>

<tr>
<td><label>Rut Usuario</label></td>
<td><input type="text" name="txt_rut_usuario" value="<?php echo $var_rut_usuario;?>"></td>
</tr>

<tr>
<td><label>Rut Cliente</label></td>
<td><input type="text" name="txt_rut_cliente" value="<?php echo $var_rut_cliente;?>"></td>
</tr>

<tr>
<td><label>Tipo Gestión</label></td>
<td><input type="text" name="txt_tipo_gestion" value="<?php echo $var_tipo_gestion;?>"></td>
</tr>

<tr>
<td><label>Resultado gestion</label>
<td><input type="text" name="txt_resultado_gestion" value="<?php echo $var_resultado_gestion;?>"></td>
</tr>

<tr>
<td><label>Comentarios</label>
<td><input type="text" name="txt_comentarios" value="<?php echo $var_comentarios;?>"></td>
</tr>

<tr>

<td><input class="ui button" type="submit" value="actualizar"></td>
</tr>
</table>
</form>
</body>

</html>