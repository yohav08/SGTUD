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

      $sql="select id, codigo_carrera, nombre, telefono, correo, carrera, genero, habilitado from jugador";

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

      $sql="select id, codigo_carrera, nombre, telefono, correo, habilitado from organizador";

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

      $sql="select o.nombre from organizador as o 
                     inner join torneo_organizador as t_o on o.id = t_o.id_organizador
                     inner join torneo as tor on t_o.id_torneo = tor.id
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





   function consultarProductos(){
      include_once('./conexion.php');
      $link=conectar();

      $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo from 
      producto as p inner join tipo as t on p.cod_tipo = t.cod_tipo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarProductosAdm(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo from 
      producto as p inner join tipo as t on p.cod_tipo = t.cod_tipo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarProductos($cod_producto){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$cod_producto;

      $sql="select p.cod_producto, p.nombre, p.unidades, p.precio, p.descripcion, t.tipo from 
      producto as p inner join tipo as t on p.cod_tipo = t.cod_tipo where p.cod_producto = '$cod'";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscartipos(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select * from tipo";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarCompras(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select cod_compra, fecha, direccion, ciudad, num_tarjeta,id_cliente from 
      compra";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function consultarClientes(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select id_cliente, nombre, correo, telefono from cliente";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }
   function consultarAdmins(){
      include_once('../conexion.php');
      $link=conectar();

      $sql="select * from administrador";

      $res=mysqli_query($link,$sql) 
      or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));

      return $res;
   }

   function buscarAdmin($id_admin){
      include_once('../conexion.php');
      $link=conectar();

      $cod=$id_admin;

      $sql="select * from administrador where id_admin = '$cod'";

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