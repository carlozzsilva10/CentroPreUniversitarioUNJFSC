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
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <title></title>
    </head>
    <body>
        <br>
        <form action = "p_contactenos.php" method = "post">
            <table align = "center">
                <tr align = "center">
                    <td><input type = "radio" name = "opcomentario" value = "C" checked>Consulta</td>
                    <td><input type = "radio" name = "opcomentario" value = "S">Sugerencia</td>
                    <td><input type = "radio" name = "opcomentario" value = "R">Reclamo</td>
                </tr>
                <tr>
                    <td colspan = "3"><textarea name = "txtdescripcion" cols = "140" rows = "18"></textarea></td>
                </tr>
            </table>
            <br>
            <center>
                <input type = "submit" value = "Registrar comentario" name = "btnregistrar">
            </center>
        </form>
    </body>
</html>