<?php
    include("auth.php");
    include("cabecera.php");
    include("conexion.php");
    $codalumno = $_SESSION["usuario"];
    $sql = "SELECT a.*, e.* FROM tbalumno a, tbalumespec e WHERE a.codalumno = e.codalumno AND a.codalumno = '$codalumno'";
    $fila = mysqli_query($cn,$sql);
    $r = mysqli_fetch_assoc($fila);
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <title>
            Principal
        </title>
    </head>
    <body>
        <h3>
            BIENVENIDO(A) <?php echo $r["nombre"]." ".$r["appaterno"]." ".$r["apmaterno"];?>
        </h3>
        <table align = "center">
            <tr>
                <td rowspan = "6">
                    <center>
                        <img src = "imgalumno/<?php echo $r["codalumno"];?>.jpg" width = "180" height = "180">
                    </center>
                </td>
                <td><b>CÓDIGO</b></td>
                <td><?php echo $r["codalumno"];?></td>
            </tr>
            <tr>
                <td><b>APELLIDO PATERNO</b></td>
                <td><?php echo $r["appaterno"];?></td>
            </tr>
            <tr>
                <td><b>APELLIDO MATERNO</b></td>
                <td><?php echo $r["apmaterno"];?></td>
            </tr>
            <tr>
                <td><b>NOMBRES</b></td>
                <td><?php echo $r["nombre"];?></td>
            </tr>
            <tr>
                <td><b>ESCUELA</b></td>
                <td><?php echo $r["escuela"];?></td>
            </tr>
            <tr>
                <td><b>AULA</b></td>
                <td><?php echo $r["aula"];?></td>
            </tr>
        </table>
        <?php
            if ($r["estado"] == 0) {
                echo "<center><h2 id = 'titulo'>Actualiza tus datos personales</h2></center>";
            } else {
        ?>
        <br>
        <table align = "center">
            <tr>
                <td><b>DIRECCIÓN</b></td>
                <td colspan = "2"><?php echo $r["direccion"];?></td>
            </tr>
            <tr>
                <td><b>EMAIL</b></td>
                <td colspan = "2"><?php echo $r["correo"];?></td>
            </tr>
            <tr>
                <td><b>FECHA DE NACIMIENTO</b></td>
                <td><b>CELULAR</b></td>
                <td><b>SEXO</b></td>
            </tr>
            <tr>
                <td><?php echo $r["fechanac"];?></td>
                <td><?php echo $r["celular"];?></td>
                <td><?php echo $r["sexo"];?></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </body>
</html>