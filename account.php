<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="./assets/css/style-login.css">
        <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>

        <title>Iniciar Sesión</title>
    </head>
    <body>
        <div class="sidenav" >
            <div class="login-main-text" >
            <h2>Sistema de Gestión de Torneos UD<br> Inicio de Sesión</h2>
            <p>Inicia sesión para acceder.</p>
            </div>
        </div>
        
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form name="form" action="verifica.php" method="POST">
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="passw">Contraseña</label>
                            <input type="password" name="passw" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-black">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </body>
</html>