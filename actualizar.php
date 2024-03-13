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
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title></title>
    </head>
    <body>
        <br>
        <form action = "p_actualizar.php" method = "post">
            <table align = "center">
                <tr>
                    <td><b>DIRECCIÓN</b></td>
                    <td colspan = "2"><input type = "text" name = "txtdireccion" value = "<?php echo $r["direccion"];?>"></td>
                </tr>
                <tr>
                    <td><b>EMAIL</b></td>
                    <td colspan = "2"><input type = "text" name = "txtcorreo" value = "<?php echo $r["correo"];?>"></td>
                </tr>
                <tr>
                    <td><b>FECHA DE NACIMIENTO</b></td>
                    <td><b>CELULAR</b></td>
                    <td><b>SEXO</b></td>
                </tr>
                <tr>
                    <td><input type = "date" name = "txtfecha" value = "<?php echo $r["fechanac"];?>"></td>
                    <td><input type = "text" name = "txtcelular" value = "<?php echo $r["celular"];?>"></td>
                    <td>
                        <?php
                            $vm = "";
                            $vf = "";
                            if ($r["sexo"] == "M") {
                                $vm = "checked";
                            } else {
                                $vf = "checked";
                            }
                        ?>
                        <label><input type = "radio" name = "opcsexo" value = "M" <?php echo $vm; ?>> M</label>
                        <label><input type = "radio" name = "opcsexo" value = "F" <?php echo $vf; ?>> F</label>
                    </td>
                </tr>
            </table>
            <br>
            <center>
                <input type = "submit" value = "Actualizar datos">
            </center>
        </form>
    </body>
</html>