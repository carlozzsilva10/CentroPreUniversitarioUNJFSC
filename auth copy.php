<?php
    session_start();
    if ($_SESSION["auth"] != "1") {
        header("location: loginusuario.php");
        exit();
    }
?>