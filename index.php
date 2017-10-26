<html>
<head>
<title>Gestiones PHP</title>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css" >


</head>
<body >
<form class="ui inverted form" name="login"action="login.php" method="post" >
    <div class="ui inverted segment">
        
    <h3 class="ui inverted block header">Bienvenido   <i class="user circle outline icon"></i></h3> 
    <table  style="margin: 0 auto;">
    <tr>
    <td><div class="field"><label>Email: </label></td>
    <td><input id="email" type="text" name="email" placeholder="Ingrese su email"></div></td>
    </tr>

    <tr>
    <td><div class="field"><label>Clave: </label></td>
    <td><input id="clave" type="password" name="clave" placeholder="Ingrese su clave" ></div></td>
    </tr>


<tr><td><button class="ui green submit button">Ingresar</button>
<div class="ui error message"></div></td></tr>
</table>


</form>
<script language="javascript">
$('.ui.form').form({
    fields:{
        usuario: {
            identifier: 'email',
            rules:[
            {
                type:'empty',
                prompt:'introduce tu usuario'
            }
            ]
        },
        contraseña: {
            identifier: 'contraseña',
            rules: [
            {
                type : 'empty',
                prompt : 'ingrese contraseña'
            },
            ]
        }
    }
}

)
;
</script>
</body>
</html>