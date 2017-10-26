<html>
<head>
<title>Agregar gestion</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
</head>
<body>

    
    <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post" class="ui form">
     <div class="ui segment">
   
     <h3 class="ui block header">AGREGAR GESTION<i class="add circle icon"></i></h3>   
    <table style="margin: 0 auto;">

         <tr>
             <td><div class="field"><label>Rut Usuario</label></td>
             <td><input type="text" name="txt_rut_usuario"></div></td>
         </tr>
         <tr>
             <td><div class="field"><label>Rut Cliente</label></td>
             <td><input type="text" name="txt_rut_cliente"></div></td>
         </tr>
         <tr>
             <td><div class="field"><label>Tipo Gestiòn</label></td>
             <td><input type="text" name="txt_tipo_gestion"></div></td>
         </tr>
         <tr>
             <td><div class="field"><label>Resultado Gestiòn</label></td>
             <td><input type="text" name="txt_resultado_gestion"></div></td>
         </tr>
         <tr>
             <td><div class="field"><label>Comentarios</label></td>
             <td>
             <textarea name="txt_comentarios" rows="4" cols="30"></textarea>
             </td>
         </tr>
         <tr>
             
            <td><button class="ui positive basic button">Guardar</button><div class="ui error message"></td>
         </tr>
       
    </table>
    
    </form>
</body>
</html>