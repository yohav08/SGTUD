<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Crear Producto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
        <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>
    <!-- Bootstrap-->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../startbootstrap-shop-homepage-gh-pages/css/styles.css" rel="stylesheet" />       
</head>
<body>
    <!-- Barra de navegación-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <?php   
                        include('../class/class_log.php');

                        function sesion(){
                            $ses=$_SESSION['usuario'];
                            return $ses;
                        }                            
                        function valid_admin(){
                            $sess=sesion();
                            include_once('../conexion.php');
                            return mysqli_query(conectar(), "select id_admin from administrador where id_admin='$sess'");
                        } 
                        function valid_client(){
                            $sess=sesion();
                            include_once('../conexion.php');
                            return mysqli_query(conectar(), "select id_cliente from cliente where id_cliente='$sess'");
                        } 
                        function conex(){
                            include_once('../conexion.php');
                            $link =conectar();
                            return $link;
                        }
                        $admin =valid_admin();
                        $client = valid_client();

                        if($sess=mysqli_fetch_array($admin)){

                            echo '<li class="nav-item"><a class="nav-link" href="./categorias.php">Categorías</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="./compras.php">Compras</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="./productos.php">Productos</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="./clientes.php">Clientes</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="./administradores.php">Administradores</a></li>';


                            $sess=sesion();
                            $nombre = mysqli_query(conex(), "select nombre from administrador where id_admin='$sess'")->fetch_row();
                            $correo = mysqli_query(conex(), "select correo from administrador where id_admin='$sess'")->fetch_row();

                            echo "
                            </ul>
                                <form class='d-flex'>
                                    <div class='btn-group'>
                                        <button type='button' class='btn btn-outline-dark dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                            $nombre[0]
                                        </button>
                                        <div class='dropdown-menu dropdown-menu-right'>
                                            <button class='dropdown-item' type='button'> $nombre[0] </button>
                                            <button class='dropdown-item' type='button'> $correo[0] </button>
                                            <div class='dropdown-divider'></div>
                                            <a href='../index.php' style='text-decoration:none;'>
                                                <button class='dropdown-item' type='button'>Salir</button>
                                            </a> 
                                        </div>
                                    </div>
                                </form>
                            <ul class='dropdown-menu text-center'>
                            ";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIN Barra de navegación-->
    <!-- Formulario Crear Producto-->
    
    <div class="container">
        <h2 class="text-black">Crear Producto</h2>
        <form action="./crearJugador.php" method="GET" class="row g-3">
            <div class="col-6">
                <label for="txt_codProducto" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="txt_codProducto" placeholder="Escriba el codigo del producto" required>
            </div>
            <div class="col-6">
                <label for="txt_nomProducto" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nomProducto" placeholder="Escriba el nombre del producto" required>
            </div>
            <div class="col-12">
                <label for="txt_descripcionProducto" class="form-label">Descripción</label>
                <textarea class="form-control" name="txt_descripcionProducto" placeholder="Escriba la descripción del producto" rows="3"></textarea>
            </div>
            <div class="col-4">
                <label for="txt_unidadesProducto" class="form-label">Unidades</label>
                <input type="text" class="form-control" name="txt_unidadesProducto" placeholder="Escriba las unidades del producto" required>
            </div>
            <div class="col-4">
                <label for="txt_precioProducto" class="form-label">Precio</label>
                <input type="text" class="form-control" name="txt_precioProducto" placeholder="Escriba el precio del producto" required>
            </div>
            <div class="col-4">
                <label for="txt_tipoprod" class="form-label">Seleccionar tipo</label>
                <select name="txt_tipoprod" class="form-control" placeholder="Seleccione el tipo del producto" required>
                    <!-- <option value="-">-</option> -->
                <?php 
                    include('./consultarSQL.php');
                    $tipo=$_GET['cod_tipo'];
                    $res=buscartipos($tipo);
                    foreach($res as $row){
                    ?>
                    <option value="<?php echo $row['cod_tipo']?>"><?php echo $row['tipo']?></option>
                <?php }?>
                </select>
            </div>
            
            <center>
            <input type="submit" value="Crear Producto" class="btn btn-primary">
            </center>
        </form>
    </div>
    <div style= "margin: 12% auto;"></div>
    <!-- FIN Formulario Crear Producto-->
        <!-- Footer-->
    <footer class="py-5 bg-dark" style="position: fixed;bottom: 0; width: 100%; ">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bryan Sánchez & Yohana Avila</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./sw/dist/sweetalert2.min.js"></script>
</body>
</html>