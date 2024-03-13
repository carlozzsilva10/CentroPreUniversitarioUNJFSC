<?php
    include("conexion.php");;
?>
<!DOCTYPE html>
    <html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Administración
        </title>
		<link rel = "icon" href = "img/Logo_UNJFSC.png">
        <link rel = "stylesheet" href = "CSS/Estilos.css">
    </head>
    <body>
		<br>
        <h1>
            ADMINISTRACIÓN DE COMENTARIOS
        </h1>
        <table align = "center">
			<tr>
				<td><b>ID</b></td>
				<td><b>CÓDIGO DE ALUMNO</b></td>
				<td><b>TIPO DE COMENTARIO</b></td>
				<td><b>DESCRIPCIÓN</b></td>
				<td><b>FECHA</b></td>
				<td><b>ESTADO</b></td>
			</tr>
			<?php 
				$sql = "SELECT * FROM tbcomentario WHERE estado = 'E'";
				$fila = mysqli_query($cn,$sql);
				$valor = 1;
				while ($r = mysqli_fetch_assoc($fila)) {
			?>
			<tr>
				<td><?php echo $valor; $valor++;?></td>
				<td><?php echo $r["codalumno"];?></td>
				<td><?php echo $r["tipocomentario"];?></td>
				<td><?php echo $r["descripcion"];?></td>
				<td><?php echo $r["fecha"];?></td>
				<td>
					<?php echo $r["estado"];?>
					<a href = "revisar.php?id=<?php echo $r["idcomentario"];?>" target = "_parent">
					    <img src = "img/editar.png" width = "30" height = "30">
					</a>
				</td>
			</tr>
			<?php  
				}
				mysqli_close($cn)
			?>
		</table>
    </body>
</html>