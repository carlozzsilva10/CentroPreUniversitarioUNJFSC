<?php
    include("auth.php");
    include("cabecera.php");
    include("conexion.php");
    $codalumno = $_SESSION["usuario"];
    $sql = "SELECT a.*, n.* FROM tbalumno a, tbnota n WHERE a.codalumno = n.codalumno AND a.codalumno = '$codalumno'";
    $fila = mysqli_query($cn,$sql);
    $r = mysqli_fetch_assoc($fila);
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title></title>
        <script src = "https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <script type = "text/javascript">
            window.onload = function () {
                var chartBarras = new CanvasJS.Chart("chartContainerBarras", {
                    theme: "light1",
                    animationEnabled: false,
                    title: {
                        text: "Reporte de notas - Barras"
                    },
                    data: [{
                        type: "column",
                        dataPoints: [
                            { label: "Práctica N° 01", y: <?php echo $r["nota1"];?> },
                            { label: "Práctica N° 02", y: <?php echo $r["nota2"];?> },
                            { label: "Práctica N° 03", y: <?php echo $r["nota3"];?> },
                            { label: "Práctica N° 04", y: <?php echo $r["nota4"];?> },
                        ]
                    }]
                });
                chartBarras.render();
                
                var chartPie = new CanvasJS.Chart("chartContainerPie", {
                    animationEnabled: true,
                    title: {
                        text: "Reporte de notas - Pie"
                    },
                    data: [{
                        type: "pie",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        dataPoints: [
                            { y: <?php echo $r["nota1"];?>, label: "Práctica N° 01" },
                            { y: <?php echo $r["nota2"];?>, label: "Práctica N° 02" },
                            { y: <?php echo $r["nota3"];?>, label: "Práctica N° 03" },
                            { y: <?php echo $r["nota4"];?>, label: "Práctica N° 04" },
                        ]
                    }]
                });
                chartPie.render();
            }
        </script>
    </head>
    <body>
        <br>
        <center>
            <h3 style = "background-color: rgba(255, 255, 255, 0.8);">
                BIENVENIDO(A) <?php echo $r["nombre"]." ".$r["appaterno"]." ".$r["apmaterno"];?>
            </h3>
        </center>
        <br>
        <table align = "center">
            <tr>
                <td align = "center"><b>PRÁCTICAS</b></td>
                <td align = "center"><b>PUNTAJE</b></td>
            </tr>
            <tr>
                <td>PRÁCTICA N°1</td>
                <td><?php echo $r["nota1"];?></td>
            </tr>
            <tr>
                <td>PRÁCTICA N°2</td>
                <td><?php echo $r["nota2"];?></td>
            </tr>
            <tr>
                <td>PRÁCTICA N°3</td>
                <td><?php echo $r["nota3"];?></td>
            </tr>
            <tr>
                <td>PRÁCTICA N°4</td>
                <td><?php echo $r["nota4"];?></td>
            </tr>
        </table>
        <br>
        <center>
            <div id = "chartContainerBarras" style = "height: 370px; width: 70%;"></div>
            <br>
            <div id = "chartContainerPie" style = "height: 370px; width: 70%;"></div>
        </center>
        <script src = "https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>