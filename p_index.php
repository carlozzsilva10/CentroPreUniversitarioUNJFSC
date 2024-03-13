<?php
    session_start();
    include("conexion.php");
    $usuario = $_POST["txtusuario"];
    $password = $_POST["txtpassword"];
    $sql = "SELECT * FROM tbusuario WHERE codalumno = '$usuario' AND password = '$password'";
    $fila = mysqli_query($cn,$sql);
    $r = mysqli_fetch_assoc($fila);
    $valor = $r["codalumno"];
    if ($valor == null) {
        header("location: index.php");
    } else {
        $_SESSION["usuario"] = $valor;
        $_SESSION["auth"] = 1;
        header("location: principal.php");
    }
?>