<?php
    include("auth.php");
    include("conexion.php");
    $codalumno = $_SESSION["usuario"];
    $direccion = $_POST["txtdireccion"];
    $correo = $_POST["txtcorreo"];
    $fechanac = $_POST["txtfecha"];
    $celular = $_POST["txtcelular"];
    $sexo = $_POST["opcsexo"];
    $sql = "UPDATE tbalumespec set direccion = '$direccion', correo = '$correo', fechanac = '$fechanac', celular = '$celular', sexo = '$sexo', estado = 1 WHERE codalumno = '$codalumno'";
    mysqli_query($cn,$sql);
    header("location: principal.php");
?>