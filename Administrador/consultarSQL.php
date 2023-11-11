<!doctype html>
<html lang="es">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
      <script type="text/javascript" language="Javascript" src="./js/funciones.js"></script>

      <title>Administradores</title>
   </head>
   <body>
   
<?php

   // JUGADORES
   function buscarjugadores($id_jugador){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_jugador;

      $sql="select id, codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado
      from jugador  where id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarJugadoresAdm(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select id, codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado, id_torneo from jugador";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarjugadoresAdm($id_jugador){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_jugador;

      $sql="select codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado
      from jugador  where id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   // ORGANIZADORES
   function buscarorganizadores($id_organizador){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_organizador;

      $sql="select id, codigo_carrera, nombre, telefono, correo, habilitado
      from organizador  where id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarOrganizadoresAdm(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select id, codigo_carrera, nombre, telefono, correo, habilitado, id_torneo from organizador";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarorganizadoresAdm($id_organizador){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_organizador;

      $sql="select codigo_carrera, nombre, telefono, correo, habilitado
      from organizador  where id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   // TORNEOS
   function consultarTorneosAdm1(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select id, nombre, descripcion, precio, tipo, fecha from torneo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarTorneosAdm(){
      include_once('./conexion.php');
      $link=conectar();

      $sql="select id, nombre, descripcion, precio, tipo, fecha from torneo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarTorneo($id_torneo){
      include_once('./conexion.php');
      $link=conectar();

      $cod=$id_torneo;

      $sql="select id, nombre from torneo where id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscartorneo($id_torneo){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_torneo;

      $sql="select id, nombre, descripcion, precio, tipo, fecha
      from torneo  where id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   // ORGANIZADOR POR TORNEO
   function consultarOrganizador_T($id_torneo){
      include_once('./conexion.php');
      $link=conectar();

      $cod=$id_torneo;

      $sql="select org.nombre from organizador as org 
                     inner join torneo as tor on org.id_torneo = tor.id
            where tor.id = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   // ESPECIFICACIONES
   function consultarEspecificacionesAdm(){
      include_once('./conexion.php');
      $link=conectar();

      $sql="select * from especificacion";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }


   // PARTIDOS
   function consultarPartidos(){
      include_once('./conexion.php');
      $link=conectar();

      $sql="select par.id, par.hora_inicio, par.hora_fin, par.contrincante_1, jugador1.nombre as nombre_1, par.contrincante_2, jugador2.nombre as nombre_2, par.id_torneo
               FROM partido as par
               JOIN jugador AS jugador1 ON par.contrincante_1 = jugador1.id
               JOIN jugador AS jugador2 ON par.contrincante_2 = jugador2.id ";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarPartidosAdm(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select par.id, par.hora_inicio, par.hora_fin, par.contrincante_1, jugador1.nombre as nombre_1, par.contrincante_2, jugador2.nombre as nombre_2, par.id_torneo
               FROM partido as par
               JOIN jugador AS jugador1 ON par.contrincante_1 = jugador1.id
               JOIN jugador AS jugador2 ON par.contrincante_2 = jugador2.id ";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarpartido($id_partido){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_partido;

      $sql="select par.id, par.hora_inicio, par.hora_fin, par.contrincante_1, jugador1.nombre as nombre_1, par.contrincante_2, jugador2.nombre as nombre_2, par.id_torneo
                           FROM partido as par
                           JOIN jugador AS jugador1 ON par.contrincante_1 = jugador1.id
                           JOIN jugador AS jugador2 ON par.contrincante_2 = jugador2.id 
               where par.id = '$cod' ";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

?>

      <script src="./bootstrap/js/bootstrap.min.js"></script>
      <script src="./sw/dist/sweetalert2.min.js"></script>
      <script src="./js/jquery-3.6.1.min.js"></script>

   </body>

</html>