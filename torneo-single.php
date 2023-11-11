<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Gestión de Torneos | SGTUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/apple-icon.png">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/templatemo.css">
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <!--    
    TemplateMo 559 Zay Shop
    https://templatemo.com/tm-559-zay-shop
    -->
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                SGTUD
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="torneos.php">Torneos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./Administrador/players.php">Jugadores</a>
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
    <?php 
        include('./Administrador/consultarSQL.php');
        $cod=$_GET['id'];
    ?>

    <!-- Contenidos del Torneo -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <?php
                    
                    $res=consultarTorneosAdm();

                    $i=0;
                    foreach($res as $row){ 
                        if ($cod == $row['id']) {     
                            $i++;                         
                    ?>
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <?php echo '<img class="card-img img-fluid" src="./assets/img/'.$row['tipo'].'.jpg" alt="Card image cap" id="torneo-detail">';?>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body" >
                            <!-- <button style="display:inline-block; float:right;" type="button" class="btn btn-danger">Danger</button> -->
                            
                            <form style="display:inline-block; float:right;" action="" method="GET">
                                <div  class="row pb-3">
                                    <div  class="col d-grid">
                                        <a role="button" class="btn btn-danger" href="./Administrador/generar_reporte.php?id=<?php echo $cod?>">
                                            Generar Reporte &nbsp
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </form>


                            <h1 class="h2" style="display:inline-block;">Torneo de <?php echo $row['tipo']; ?> 
                        </h1>
                            

                            <?php
                                $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                $fecha_1 = explode("-", $row['fecha']);
                                $fecha = $fecha_1[2].' de '. $meses[intval($fecha_1[1])-1] .', '.$fecha_1[0];                                
                            ?>
                            <p style="font-weight:bold;" class="h3 py-2" >Fecha: <span  id="fecha"><?php echo $fecha;?></span></p>

                            <h6>Descripción:</h6>
                            <p><?php echo $row['descripcion'];?></p>

                            <h6>Organizadores: </h6>
                            <?php 
                                $y=0;
                                $res0=consultarOrganizador_T($cod);
                                foreach($res0 as $row){?>
                                        <li><?php echo $row['nombre']?></li>
                            <?php }?>

                            
                    <?php }}?>
                            <br><h6>Especificaciones:</h6>
                            <ul class="pb-3">
                            <?php 
                                $y=0;
                                $res1=consultarEspecificacionesAdm();
                                foreach($res1 as $row){ 
                                    if ($cod == $row['id_torneo']) {     
                                        $y++;?>
                                        <li><?php echo $row['especificacion']?></li>
                            <?php }}?>
                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear"> 
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a role="button" class="btn btn-success btn-lg" href="crear_inscripcion.php?id=<?php echo $cod?>">Inscribirse</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contenidos del Torneo -->
    
    <section class="bg-light">
        <div class="container">
            <div class="row text-center">
                <h1 class="h1">Partidos</h1>
            </div>
        </div>
    </section>
            

    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <?php
                $res1=consultarPartidos();
                $i=1;
                foreach($res1 as $row){
                    if ($row['id_torneo']==$cod) {
                    ?>
                <div class="col-md-3">
                    <div class="card mb-3 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="assets/img/vs.jpg">
                        </div>
                            <?php 
                                $partido =  $row['id']; 
                            ?>
                        <div class="card-body">
                            <h3><strong style="display: flex; justify-content: center; align-items: center;">Partido N°<?php echo $i; $i++;?></strong></h3>                           
                            <p class="text-center mb-0"><?php echo $row['nombre_1']; ?> <br> VS <br> <?php echo $row['nombre_2']; ?></p>
                            <div style="display: flex; justify-content: center; align-items: center;">
                            <!-- Modificar JUGADOR-->
                            <a class="btn btn-secondary" href="./Administrador/modificar_partido.php?id=<?php echo $cod?>&id_partido=<?php echo $partido?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/> <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>  &nbsp&nbsp
                            <!-- FIN Modificar JUGADOR-->
                            
                            <!-- Eliminar JUGADOR-->
                            <a class="btn btn-danger" href="./Administrador/eliminarPartido.php?id=<?php echo $cod?>&id_partido=<?php echo $partido?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                </svg>
                            </a>
                            <!-- FIN Eliminar JUGADOR -->
                        </div>
                        </div>
                    </div>
                </div>
            
                <?php }}?>
            </div>

            <form action="./Administrador/crear_partido.php" method="GET">
                <div class="row pb-3">
                    <div class="col d-grid">
                        <a role="button" href="./Administrador/crear_partido.php?id=<?php echo $cod?>&id_partido=<?php echo $partido+1?>" class="btn btn-success btn-lg">Agregar Partido</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

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
    <script src="./assets/js/jquery-1.11.0.min.js"></script>
    <script src="./assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/templatemo.js"></script>
    <script src="./assets/js/custom.js"></script>
    <!-- End Script -->


</body>

</html>