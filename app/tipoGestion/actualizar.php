<?php 
ini_set("display_errors",1);
$var_id_tipo_gestion        = $_GET["id_tipo_gestion"];
$var_nombre_tipo_gestion    = $_GET["nombre_tipo_gestion"];

?>
<html>
<head>
<title>Actualizar</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
</head>

<body>
<h1>Actualizar Tipo</h1>
<hr>
<form name="frm_actualizar" action="actualizar-dml.php" method="post">
<!-- Campo oculto para almacenar el ID del tipo de gestión-->
<input type="hidden" name="hdn_id_tipo_gestion" value="<?php echo $var_id_tipo_gestion;?>">
<label>Nombre Tipo Gestión</label>
<div class="ui input">
<input type="text" name="txt_nombre_tipo_gestion" value="<?php echo $var_nombre_tipo_gestion;?>">
</div>
<input class="ui button" type="submit" value="Actualizar">
</form>
</body>

</html>