<?php
    include("conexion.php");

    // Recepcionar lo que viene del formulario
    $archivo = $_FILES["archivo"]["tmp_name"];

    // Sacar la información que está adentro del archivo
    $fila = file($archivo);
    for ($i = 0; $i < count($fila); $i++) { 
        list($ca,$no,$ap,$am,$es,$au) = explode(";",$fila[$i]);
        
        $pa = generapass();
        $sqlal = "INSERT INTO tbalumno (codalumno,nombre,appaterno,apmaterno,escuela,aula) VALUES ('$ca','$no','$ap','$am','$es','$au')";
        $sqlus = "INSERT INTO tbusuario (codalumno,password) VALUES ('$ca','$pa')";
        $sqlno = "INSERT INTO tbnota (codalumno) VALUES ('$ca')";
        mysqli_query($cn,$sqlal);
        mysqli_query($cn,$sqlus);
        mysqli_query($cn,$sqlno);
        /*
        $sqlespec = "INSERT INTO tbalumespec (codalumno) VALUES ('$ca')";
        mysqli_query($cn,$sqlespec);
        */
    }

    function generapass() {
        $plantilla = "qwertyuiopasdfghjklzxcvbnm1234567890";
        $password = "";
        for ($i = 1; $i <= 8; $i++) { 
            $password = $password.substr($plantilla,rand(1,36),1);
        }
        return $password;
    }
    
    
?>