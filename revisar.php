<?php
    include("conexion.php");

    if (isset($_GET['id'])) {
        $idcomentario = $_GET['id'];

        $sql = "UPDATE tbcomentario SET estado = 'A' WHERE idcomentario = $idcomentario";
        mysqli_query($cn, $sql);

        mysqli_close($cn);

        header('location: administracion.php');
    }
?>
