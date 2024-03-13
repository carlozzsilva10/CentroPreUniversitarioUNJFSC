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
        <form action = "p_cambiarpass.php" method = "post">
            <table align = "center">
                <tr>
                    <td><b>INGRESAR CONTRASEÑA ACTUAL</b></td>
                    <td><input type = "password" name = "pwdpassactual" maxlength = "8"></td>
                </tr>
                <tr>
                    <td><b>INGRESAR NUEVA CONTRASEÑA</b></td>
                    <td><input type = "password" name = "pwdpass" maxlength = "8"></td>
                </tr>
                <tr>
                    <td><b>REPETIR NUEVA CONTRASEÑA</b></td>
                    <td><input type = "password" name = "pwdrepass" maxlength = "8"></td>
                </tr>
                <tr>
                    <td colspan = "2">
                        <center>
                            <input type = "submit" value = "Cambiar contraseña">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>