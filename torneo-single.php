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

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <?php
                    include('./Administrador/consultarSQL.php');
                    $cod=$_GET['id'];
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
                            <h1 class="h2">Torneo de <?php echo $row['tipo']; ?> </h1>
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
    <!-- Close Content -->

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