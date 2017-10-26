<html>
<head>
<title>Agregar Cliente</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css" >
</head>
<body>

    <hr>
    <form name ="frm_agregar_cliente" action="agregar-dml.php" method="post" class="ui form">
     <div class="ui segment">
        <h3 class="ui block header">AGREGAR CLIENTE<i class="add circle icon"></i></h3> 
    <table style="margin: 0 auto;" >
        <tr>
             <td><div class="field"><label>RUT CLIENTE</label></td>
             <td><input type="text" name="txt_rut_cliente"></div></td>
        </tr>

        <tr>
             <td><div class="field"><label>NOMBRES</label></td>
             <td><input type="text" name="txt_nombres"></div></td>
        </tr>

        <tr>
             <td><div class="field"><label>APELLIDOS</label></td>
             <td><input type="text" name="txt_apellidos"></div></td>
        </tr>

        <tr>
             <td><div class="field"><label>EMAIL</label></td>
              <td><input type="text" name="txt_email"></div></td>
        </tr>

        <tr>
             <td><div class="field"><label>CELULAR</label></td>
             <td><input type="text" name="txt_celular"></div></td>
         </tr>

         <tr>
             <td><div class="field"><label>FONO FIJO</label></td>
              <td><input type="text" name="txt_fono_fijo"></div></td>
        </tr>

        <tr>
               <td><button class="ui positive basic button">Guardar</button><div class="ui error message"></td>
        </tr>
       
    </table>
    </form>
</body>
</html>