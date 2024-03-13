<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title>
            Reporte general
        </title>
        <link rel = "icon" href = "img/Logo_UNJFSC.png">
        <link rel = "stylesheet" href = "CSS/Estilos.css">
    </head>
    <body>
        <h1>
            REPORTE GENERAL
        </h1>
        <table align = "center">
            <tr>
                <td><b>CÓDIGO</b></td>
                <td><b>APELLIDOS Y NOMBRES</b></td>
                <td><b>ESCUELA</b></td>
                <td><b>AULA</b></td>
            </tr>
            <?php
                include("conexion.php");
                if (isset($_GET["lim"])) {
                    $lim = $_GET["lim"];
                    $sql = "SELECT * FROM tbalumno LIMIT $lim, 30";
                }
                else {
                    $sql = "SELECT * FROM tbalumno LIMIT 0, 30";
                }
                $fila = mysqli_query($cn,$sql);
                while ($r = mysqli_fetch_assoc($fila)) {
            ?>
            <tr>
                <td><?php echo $r["codalumno"];?></td>
                <td><?php echo $r["appaterno"]." ".$r["apmaterno"]." ".$r["nombre"];?></td>
                <td><?php echo $r["escuela"];?></td>
                <td><?php echo $r["aula"];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br>
        <center>
            <?php
                $sql = "SELECT COUNT(*) AS CANTIDAD FROM tbalumno";
                $fila = mysqli_query($cn,$sql);
                $r = mysqli_fetch_assoc($fila);
                $total = $r["CANTIDAD"];
                $cantregxpag = 30;
                $nroporpag = ceil($total / $cantregxpag);
                for ($i = 0; $i < $nroporpag; $i++) { 
                    $limit = $i * $cantregxpag;
                    echo "<a href = 'reporte.php?lim=$limit' target = '_parent'>".($i+1)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            ?>
        </center>
    </body>
</html>