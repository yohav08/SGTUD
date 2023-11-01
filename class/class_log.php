<?php
session_start();
class Login{
    public function validar($user,$pass){
        include('./conexion.php');
        $link=conectar();

        //validar si el usuario existe o no
        $sqla="select * from administrador where id_admin='$user'";

        $resa=mysqli_query($link, $sqla);

        if($row0=mysqli_fetch_array($resa)){

            $sql1="select * from administrador where id_admin='$user' and clave='$pass'";
            $res1=mysqli_query($link,$sql1);
            
            if($row1=mysqli_fetch_array($res1)){
                $ses= $_SESSION['usuario'];
                $nombre = mysqli_query($link, "select nombre from administrador where id_admin='$ses'")->fetch_row();
                                
                //se crea la variable de SESION
                $_SESSION['usuario']=$row1['id_admin'];
                echo "
                <script type='text/javascript'>
                Swal.fire({
                icon : 'success',
                title : 'BIENVENIDO',
                text :  'Administrador: $nombre[0], Bienvenido al Sistema'
                }).then((result) => {
                    if(result.isConfirmed){
                    window.location='./index.php';
                    }
                }); </script>";
            }else{
                $_SESSION['usuario']=NULL;
                echo "
                <script type='text/javascript'>
                Swal.fire({
                icon : 'error',
                title : 'ERROR!!',
                text :  ' el usuario o contraseña  no son correctos'
                }).then((result) => {
                    if(result.isConfirmed){
                    window.location='./index.php';
                    }
                }); </script>";

            }

        
        }else{
            echo "
                <script type='text/javascript'>
                Swal.fire({
                icon : 'error',
                title : 'ERROR!!',
                text :  ' el usuario #$user no existe en el sistema'
                }).then((result) => {
                    if(result.isConfirmed){
                    window.location='./index.php';
                    }
                }); </script>";

        }
    }
}

?>
