<?php
    include("conexion.php");

    $archivo = $_FILES["archivo"]["tmp_name"];
    $opcion = $_POST["lstnota"];

    // Sacar la información que está adentro del archivo
    $fila = file($archivo);
    for ($i = 0; $i < count($fila); $i++) { 
        list($co,$no) = explode(";",$fila[$i]);
        $sql = "UPDATE tbnota SET nota $opcion = $no WHERE codalumno = '$co'";
        mysqli_query($cn,$sql);
    }
?>