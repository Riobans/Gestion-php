<?php
ini_set("display_errors", 1);

$var_rut_cliente    = $_GET["rut_cliente"];
$var_nombres        = $_GET["nombres"];
$var_apellidos      = $_GET["apellidos"];
$var_email          = $_GET["email"];
$var_celular        = $_GET["celular"];
$var_fono_fijo      = $_GET["fono_fijo"];

?>

<html>
<head>
<title>Actualizar</title>
  <script src="../../js/jquery-3.2.1.min.js"></script>
  <script src="../../semantic/semantic.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
</head>
<body> 
<h1>actualizar Cliente</h1>
<hr>

<form class="ui form" name="frm_actualizar" action="actualizar-dml.php" method="post">
<div class="field">
<!-- campo ocuto para almacenar el id del cliente-->
<input type="hidden" name="hdn_rut_cliente" value="<?php echo $var_rut_cliente;?>">
<table>
<tr>
<td><label>Nombres</label></td>
<td><input type="text" name="txt_nombres" value="<?php echo $var_nombres;?>"></td>
</tr>
<tr>
<td><label>Apellidos</label></td>
<td><input type="text" name="txt_apellidos" value="<?php echo $var_apellidos;?>"></td>
</tr>
<tr>
<td><label>Email</label>
<td><input type="text" name="txt_email" value="<?php echo $var_email;?>"></td>
</tr>
<tr>
<td><label>Celular</label></td>
<td><input type="text" name="txt_celular" value="<?php echo $var_celular;?>"></td>
</tr>
<tr>
<td><label>Fono Fijo</label></td>
<td><input type="text" name="txt_fono_fijo" value="<?php echo $var_fono_fijo;?>"></td>
</tr>
<tr>
<td><input class="ui button" type="submit" value="actualizar"></td>
</tr>
</table>
</div>
</form>
</body>
</html>