<!DOCTYPE html>
<html>
<head>
    <title>ADMINISTRADOR R.E.U.M.A.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
	  <!-- LINKS A BOOTSTRAP CORE CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <!-- LINKS A HOJA DE ESTILOS -->
  <link href="../css/reuma.css" rel="stylesheet">
    
    <style type="text/css">
    #login-form .input-group, #login-form .form-group {
        margin-top: 10px;
    }
    
    #login-form .btn-default {
        background-color: #EEE;
    }
    
    .brand {
        color: #CCC;
    }
    </style>
</head>
<body>
<div class="container" style="margin-top: 30px;">

    <div class="col-6" style="margin: auto; max-width: 450px;">
        <div class="panel panel-default">
            <div class="panel-body">
                <form id="login-form" method="post" action="login.php" role="form" class="text-center">
				  <img src="../images/logo-horizontal-admin.jpg" width="450" height="147" alt=""/>
<div class="input-group">
            <div class="input-group">
                      <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" name="email" placeholder="Email de usuario" required class="form-control" />
                      </div>
            </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" name="password" placeholder="Contraseña" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Ingresar" class="btn btn-primary btn-block " />
                    </div>
                    <div class="form-group">
                        <hr/>
                        <div class="col-sm-6" style="padding: 0;">Usuario nuevo? <a href="../registro.html">Registro Nuevo</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>