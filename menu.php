<?php
include('funciones.php');
$opc=$_GET['op'];
?>

<?php

switch ($opc) {
    case 1:{//Ejercicio 7.2
        ?>
        <h1 align="center">EJERCICIO 7.2</h1><hr>
        <form action="menu.php?op=1" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>Digite la cantidad de números:</th>
                    <td><input type="number" name="tam"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="vecNumeros" value="MOSTRAR" >
                    </td>
                    <td colspan="2">
                        <input type="reset" value="LIMPIAR" >
                    </td>
                </tr>
            </table>
            <hr>
        </form>
        <?php
            if(isset($_POST['vecNumeros'])){
            $t=$_REQUEST['tam'];
        ?>
        <form action="menu.php?op=1" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>Digite los números:</th>
                </tr>
                <?php 
                    for($i=0;$i<$t;$i++){  
                ?>
                <tr>
                    <td>
                        <input type="number" name="num[]">
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="enviar" value="CALCULAR">
                    </td>
                    <td colspan="2">
                        <input type="reset" value="LIMPIAR">
                    </td>
                </tr>
            </table>
        </form>
        <?php } ?> 
        <?php
            if(isset($_POST['enviar'])){
                $num=$_REQUEST['num'];
                $tam=count($num);
                Ejercicio_7_2($num,$tam);
            }
        ?>
        <?php
        break;
    }

    case 2:{//Ejercicio 7.5
        ?>
        <h1 align="center">EJERCICIO 7.5</h1><HR>
        <form action="menu.php?op=2" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>Cantidad de especificaciones:</th>
                    <td><input type="number" name="tam"></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="cal" value="MOSTRAR" > </td>
                    <!-- <td colspan="2"> <input type="reset" value="LIMPIAR" > </td> -->
                </tr>
                
            </table>
            <hr>
        </form>
        <?php
            if(isset($_POST['cal'])){//VALIDAR EL BOTON DE ENVIO
            $t=$_REQUEST['tam'];
        ?>
        <form action="menu.php?op=2" method="POST">
            <table border="0" align="center">
                <tr> <th>Digite los números:</th> </tr>
                <?php for($i=0;$i<$t;$i++){  ?>
                <tr>
                    <td><input type="number" name="num[]"></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"><input type="submit" name="enviar" value="CALCULAR"></td>
                    <td colspan="2"><input type="reset" value="LIMPIAR"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
        <?php 
            if(isset($_POST['enviar'])){//VALIDAR EL BOTON DE ENVIO
                $num=$_REQUEST['num'];
                $tam=count($num);
                $aux=0;
                Ejercicio_7_5($num,$tam,$aux);
            }
            ?>
        <?php
        break;
    }

    case 3:{//Ejercicio 7.6
        ?>
        <h1 align="center">EJERCICIO 7.6</h1><HR>
        <form action="menu.php?op=3" method="POST">
            <h3 align="center">DIGITE RANGO [min-max] DE LOS NÚMEROS DEL VECTOR</h3>
            <table border="0" align="center">
                <tr>
                    <td><input type="number" name="min"></td>
                    <td><input type="number" name="max"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="submit" name="call" value="MOSTRAR" > </td>
                    <td colspan="2"> <input type="reset" value="LIMPIAR" > </td>
                </tr>
                
            </table>
            <hr>
        </form>

        <?php
            if(isset($_POST['call'])){//VALIDAR EL BOTON DE ENVIO
                $num= array();
                $min=$_REQUEST['min'];
                $max=$_REQUEST['max'];
                Ejercicio_7_6($num,$min,$max);
            }
        ?>
        <?php
        break;
    }

    case 4:{
        ?>
        <h1 align="center">EJERCICIO 7.8</h1><hr>
        
        <form action="menu.php?op=4" method="POST"> 
            <p align="center">Se generará una tabla con números aleatorios que serán divididos entre el número dado</p>
            <table border="0" align="center">
                <tr>
                    <th>DIGITE UN NÚMERO:</th>
                    <td><input type="number" name="divisor"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="submit" name="call" value="MOSTRAR" > </td>
                    <td colspan="2"> <input type="reset" value="LIMPIAR" > </td>
                </tr>
            </table>
        </form>
        <br><br>
        <?php
            if(isset($_POST['call'])){//VALIDAR EL BOTON DE ENVIO
                $divisor=$_REQUEST['divisor'];
                $num= array();
                Ejercicio_7_8($divisor,$num);
            }
        ?>
        <?php
        break;
    }

    case 5:{
        ?>
        <h1 align="center">EJERCICIO 7.12</h1><HR>
        <form action="menu.php?op=5" method="POST">
            <table border="0" align="center">
                <tr>
                    <td> <input type="submit" name="cal" value="MOSTRAR TABLA" > </td>
                    <td> <input type="submit" name="clean" value="LIMPIAR" > </td>
                </tr>
            </table>
            <hr>
        </form>
        <?php
            if (isset($_POST['clean'])){
                echo "<p align='center'>Pantalla limpiada</p>";
            }
            if(isset($_POST['cal'])){
                Ejercicio_7_12();
            }
        ?>
        <?php
        break;
    }

    case 6:{
        ?>
        <h1 align="center">EJERCICIO 7.13</h1><HR>
        <form action="menu.php?op=6" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>DIGITE NÚMEROS DE TEMPERATURAS:</th>
                    <td><input type="number" name="tam"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="submit" name="cal" value="MOSTRAR" > </td>
                    <td colspan="2"> <input type="reset" value="LIMPIAR" > </td>
                </tr>
            </table>
            <hr>
        </form>
        <?php
            if(isset($_POST['cal'])){//VALIDAR EL BOTON DE ENVIO
                $tam=$_REQUEST['tam'];
                Ejercicio_7_13($tam);
            } 
        ?>
        <?php
        break;
    }

    case 7:{
        ?>
        <h1 align="center">EJERCICIO 7.21</h1><HR>
        <form action="menu.php?op=7" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>Digite la cantidad de almacenes: </th>
                    <td><input type="number" name="almacenes"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="submit" name="vecAlmacenes" value="MOSTRAR"></td>
                    <td colspan="2"> <input type="reset" value="LIMPIAR" > </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['vecAlmacenes'])) {
            $vecAlmacenes = $_REQUEST['almacenes'];
        ?>
        <form action="menu.php?op=7" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>ALMACEN</th>
                    <th>VENTAS</th>
                </tr>
                <?php
                for ($i = 0; $i < ($vecAlmacenes); $i++) {
                    echo "<tr>";
                    echo "<td><input type='text' name='nombresAlmacenes[]'></td>";
                    echo "<td><input type='number' name='ventasAlmacenes[]'></td>";
                    echo "</tr>";
                }
                ?>
                <td colspan="3"> <input type="submit" name="enviarAlmacenes" value="MOSTRAR"></td>
                <td colspan="2"> <input type="reset" value="LIMPIAR" > </td>
            <?php
        }
            ?>
            </table>
        </form>
        <?php
            if (isset($_POST['enviarAlmacenes'])) {
                $almacenes = $_REQUEST['nombresAlmacenes'];
                $ventas = $_REQUEST['ventasAlmacenes'];
                Ejercicio_7_21($almacenes, $ventas);
            }
        ?>
        <?php
        break;
    }

    case 8:{
        ?>
        <h1 align="center">EJERCICIO 7.22</h1><HR>
        <form action="menu.php?op=8" method="POST">
            <table border="0" align="center">
            <table border="0" align="center">
                <tr>
                    <td> <input type="submit" name="cal" value="MOSTRAR TABLA" > </td>
                    <td> <input type="submit" name="clean" value="LIMPIAR" > </td>
                </tr>
            </table>
            <hr>
        </form>
        <?php
            if (isset($_POST['clean'])){
                echo "<p align='center'>Pantalla limpiada</p>";
            }
            if(isset($_POST['cal'])){
                Ejercicio_7_22();
            }
        ?>
        <?php
        break;
    }

    case 9:{
        ?>
        <h1 align="center">EJERCICIO 7.27</h1><HR>
        <form action="menu.php?op=9" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>DIGITE CUANTOS NUMEROS DESEA CAPTURAR:</th>
                    <td><input type="number" name="tam"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="submit" name="cal" value="MOSTRAR" > </td>
                    <td colspan="2"> <input type="reset" value="LIMPIAR" > </td>
                </tr>
                
            </table>
            <hr>
        </form>
        <?php
            if(isset($_POST['cal'])){
            $t=$_REQUEST['tam'];
        ?>
        <form action="menu.php?op=9" method="POST">
            <table border="0" align="center">
                <tr> <th>DIGITE LOS NUMEROS</th> </tr>
                <?php for($i=0;$i<$t;$i++){  ?>
                    <tr>
                        <td><input type="number" name="num[]"></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"><input type="submit" name="enviar" value="CALCULAR"></td>
                    <td colspan="2"><input type="reset" value="LIMPIAR"></td>
                </tr>
            </table>
        </form>
        <?php
        }
        if(isset($_POST['enviar'])){
            $num=$_REQUEST['num'];
            $tam=count($num);
            $acum=0;
            Ejercicio_7_27($num,$tam,$acum);
        }
        break;
    }

    case 10:{
        ?>
        <h1 align="center">EJERCICIO 7.28</h1><HR>
        <form action="menu.php?op=10" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>DIGITE NOMBRE: </th>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="cal" value="BUSCAR" > </td>
                    <td> <input type="submit" name="clean" value="LIMPIAR" > </td>
                </tr>
            </table>
            <hr>
        </form>
        <?php
            if (isset($_POST['clean'])){
                echo "<p align='center'>Pantalla limpiada</p>";
            }
            if(isset($_POST['cal'])){//VALIDAR EL BOTON DE ENVIO
                $nombre=$_REQUEST['nombre'];
                Ejercicio_7_28($nombre);
            }
            ?>
            <?php
        break;
    }
}
?>