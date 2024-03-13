<?php 
    include("auth.php");
    include("conexion.php");
    $codalumno = $_SESSION["usuario"];
    $passactual = $_POST["pwdpassactual"];
    $pass = $_POST["pwdpass"];
    $repass = $_POST["pwdrepass"];
    $sql = "SELECT * FROM tbusuario WHERE codalumno = '$codalumno' AND password = '$passactual'";
    $fila = mysqli_query($cn,$sql);
    $r = mysqli_fetch_assoc($fila);
    $valor = $r["codalumno"];

    if ($valor == null) {
      header("location: cambiarpass.php");
    } else {
      if (strcmp($pass,$repass) == 0) {
        if (strlen(trim($pass)) == 8 && strlen(trim($repass)) == 8) {
          $sql = "UPDATE tbusuario SET password = '$pass' WHERE codalumno = '$codalumno'";
          mysqli_query($cn,$sql);
          header("location: cerrarsesion.php");
        } else {
          header("location: cambiarpass.php");
        }
      } else {
        header("location: cambiarpass.php");
      }
    }
?>
