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
        <style>
            input[type = file] {
                border: 1px solid #00539C;
                border-radius: 5px;
            }

            fieldset {
                border: 1px solid #00539C;
                border-radius: 5px;
                padding: 10px;
                width: 50%;
                height: 50px;
                background-color: rgba(255, 255, 255, 0.8);
                margin: auto;
            }

            form {
                text-align: center;
            }

            fieldset label {
                color: #1E88E5;
            }
        </style>
    </head>
    <body>
        <br>
        <fieldset>
            <form action = "p_imagenperfil.php" method = "post" enctype = "multipart/form-data">
                <center>
                    Escoger archivo (Solo .jpg)
                    <input type = "file" name = "archivo">
                    <input type = "submit" value = "Cargar foto">
                </center>
            </form>
            <br><br><br>
            <?php 
                if (isset($_GET["msj"])) {
                    $mensaje = $_GET["msj"];
                    echo "<center><h1 id = 'titulo'>$mensaje</h1></center>";
                }
            ?>
        </fieldset>
    </body>
</html>