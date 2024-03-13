<?php
    include("auth.php");
    $codalumno = $_SESSION["usuario"];
    $archivo = $_FILES["archivo"]["tmp_name"];
    $nombre = $_FILES["archivo"]["name"];
    list($n,$e) = explode(".",$nombre);
    if ($e == "jpg") {
        move_uploaded_file($archivo, "imgalumno/".$codalumno.".jpg");
        header("location: principal.php");
    } else {
        $mensaje="SOLO SE ACEPTAN ARCHIVOS .JPG";
        header('location: imagenperfil.php?msj='.$mensaje);
    }
?>