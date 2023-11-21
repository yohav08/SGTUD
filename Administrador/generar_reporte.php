<!DOCTYPE html>
<html lang="en">

<head class="parte01">
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

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
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
                            <a class="nav-link" href="./organizador.php">Organizadores</a>
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
                    <a class="nav-icon position-relative text-decoration-none" href="account.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
                 <!-- Close Acounnt -->
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            
            <!-- TÍTULO -->
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <?php
                    include('./consultarSQL.php');
                    $cod=$_GET['id'];

                    $res_0=consultarTorneosAdm1();

                    foreach($res_0 as $row){ 
                        if ( $row['id'] == $cod) { ?>  

                        <h1 class="h1">Reporte Torneo de <?php echo $row['tipo']?></h1>
                    <?php }}?>
                </div>
            </div>

            <!-- JUGADORES -->
            <section class="bg-light">
                <div class="container">
                    <div class="row text-center">
                        <h1 class="h2">Jugadores habilitados para inscripción al torneo</h1> <br><br>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Código</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col" class="correo">Correo</th>                            
                            <th scope="col">Carrera</th>
                            <th scope="col">Género</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $res_1=consultarJugadoresAdm1();
                            $i=1;
                            foreach($res_1 as $row){
                                if ($row['habilitado']=='SI') {?>

                        <tr>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['codigo_carrera']?></td>
                            <td><?php echo $row['telefono']?></td>
                            <td class="correo"><?php echo $row['correo']?></td>
                            <td><?php echo $row['carrera']?></td>
                            <td><?php echo $row['genero']?></td>
                        </tr>
                        
                        <?php }}?>
                    </tbody>
                </table>
            </section> 

            <!-- PARTIDOS -->
            <section class="bg-light">
                <div class="container">
                    <div class="row text-center">
                        <h1 class="h2">Partidos del Torneo</h1> <br><br>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hora de Inicio</th>
                            <th scope="col">Hora de Finalización</th>
                            <th scope="col">Contrincante N°1</th>
                            <th scope="col">Contrincante N°2</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $res_2=consultarPartidosAdm();
                            $i=1;
                            foreach($res_2 as $row){
                                if ($row['id_torneo']==$cod) {?>

                        <tr>
                            <td><?php echo $row['hora_inicio']?></td>
                            <td><?php echo $row['hora_fin']?></td>
                            <td><?php echo $row['nombre_1']?></td>
                            <td><?php echo $row['nombre_2']?></td>
                        </tr>
                        
                        <?php }}?>
                    </tbody>
                </table>
            </section> 
                    
            <form action="" method="GET">
                <div  class="row pb-3">
                <style>
                    @media print{
                        .parte01 , .pie_pag , .navegacion, .boton, .correo {
                            display: none;
                        }
                    }
                </style>
                    <div  class="col d-grid">
                        <center>
                            <a role="button" onclick="print()" class=" boton btn btn-danger" href="./generar_reporte.php?id=<?php echo $cod?>">
                            Imprimir &nbsp
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            </svg>
                        </a>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class=" pie_pag bg-dark" id="tempaltemo_footer">
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