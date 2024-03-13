<?php
    include("auth.php");
    include("conexion.php");

    $codalumno = $_SESSION["usuario"];
    $tipocomentario = $_POST["opcomentario"];
    $descripcion = $_POST["txtdescripcion"];

    if (!empty($tipocomentario) && !empty($descripcion)) {
        $sql = "INSERT INTO tbcomentario (codalumno, tipocomentario, descripcion) VALUES ('$codalumno', '$tipocomentario', '$descripcion')";
        
        if (mysqli_query($cn, $sql)) {
            header("location: contactenos.php");
        } else {
            echo "Error al ejecutar la consulta: ".mysqli_error($cn);
        }
    } else {
        echo "Por favor, selecciona un tipo de comentario y proporciona una descripción.";
    }
?>
