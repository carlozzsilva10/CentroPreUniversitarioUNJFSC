<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title>
            Carga de Datos
        </title>
        <link rel = "stylesheet" href = "CSS/Estilos.css">
    </head>
    <body>
        <br>
        <h1>
            Carga de Notas
        </h1>
        <fieldset>
            <form action = "p_cargaevaluacion.php" method = "post" enctype = "multipart/form-data">
                Escoger archivo
                <input type = "file" name = "archivo" id = "">
                <select name = "lstnota" id="">
                    <option value = "1">Evaluación 1</option>
                    <option value = "2">Evaluación 2</option>
                    <option value = "3">Evaluación 3</option>
                    <option value = "4">Evaluación 4</option>
                </select>
                <input type = "submit" value = "Alimentar Evaluaciones" name = "btnalimentarbd">
            </form>
        </fieldset>
    </body>
</html>