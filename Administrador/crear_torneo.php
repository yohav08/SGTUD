<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Gestión de Torneos | SGTUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/apple-icon.png">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/templatemo.css">
    <link rel="stylesheet" href="../assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <!--
    TemplateMo 559 Zay Shop
    https://templatemo.com/tm-559-zay-shop
    -->
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="../index.php">
                SGTUD
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about.php">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../torneos.php">Torneos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./players.php">Jugadores</a>
                        </li>
                    </ul>
                </div>

                 <!-- Acount -> Que solo se pueda iniciar sesión los administradores para la creación de jugadores -->
                <div class="navbar align-self-center d-flex">
                    <a class="nav-icon position-relative text-decoration-none" href=".../account.html">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
                 <!-- Close Acounnt -->
            </div>

        </div>
    </nav>
    <!-- Close Header -->



    <!-- Formulario Crear Jugador-->
    <div class="container"> <br><br>
        <h2 class="text-black">Crear Torneo</h2>
        <form action="./crearTorneo.php" method="GET" class="row g-3">

            <div class="col-2">
                <label for="txt_nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="txt_nombre"  placeholder="Escriba el nombre del Torneo" required>
            </div>
            <div class="col-10">
                <label for="txt_descripcion" class="form-label">Descripción: </label>
                <input type="text" class="form-control" name="txt_descripcion" placeholder="Escriba la descripción del evento" required>
            </div>
            <div class="col-4">
                <label for="txt_precio" class="form-label">Precio: </label>
                <input type="text" class="form-control" name="txt_precio" placeholder="Escriba el precio de inscripción" required>
            </div>  
            <div class="col-4">
                <label for="txt_fecha" class="form-label">Fecha: </label>
                <input type="date" class="form-control" name="txt_fecha" placeholder="Escriba la fecha del torneo" required>
            </div>  
            <div class="col-4">
                <label for="txt_tipo" class="form-label">Tipo: </label>
                <select name="txt_tipo" class="form-control"required>
                    <option value="Voleibol">Voleibol</option>
                    <option value="Ajedrez">Ajedrez</option>
                    <option value="Baloncesto">Baloncesto</option>
                    <option value="Boxeo">Boxeo</option>
                    <option value="FIFA_23">FIFA 23</option>
                    <option value="Futbol">Futbol</option>
                    <option value="Parques">Parqués</option>
                    <option value="XBOX360">XBOX360</option>
                </select>
            </div> 
            <table class="table table-dark">
                <tbody>
                    <tr>
                        <td>
                            <div class="col-">
                                <label for="txt_organizador" class="form-label">Organizadores: </label>
                                <input type="text" class="form-control" name="txt_organizador" placeholder="Escriba el teléfono del Estudiante" required>
                            </div>  
                        </td>
                        <td>
                            <div class="col-12">
                                <label for="txt_especificacion" class="form-label">Especificaciones: </label>
                                <input type="text" class="form-control" name="txt_especificacion" placeholder="Escriba una especificación" required>
                                
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <center>
            <input type="submit" value="Agregar Jugador" class="btn btn-primary">
            </center>
        </form>
    </div>
    <div style= "margin: 12% auto;"></div>
    <!-- FIN Formulario Crear Producto-->

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">

            <div class="col-md-12 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo text-center">SGTDUD</h2>
            </div>


            <div class="row text-light mb-4 align-items-center">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <ul class="list-inline text-left footer-icons " >
                        <li class="list-inline-item border border-light rounded-circle text-center" >
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3 text-center">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Yohana Avila, Andrés Lopez, Bryan Sanchez and Fernanda Tejero
                            ||| Designed by <a rel="sponsored" href="https://templatemo.com/tm-559-zay-shop" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/templatemo.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- End Script -->

</body>

</html>