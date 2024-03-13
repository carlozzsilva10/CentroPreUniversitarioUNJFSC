<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title>
            Carga de Datos
        </title>
        <link rel = "stylesheet" href = "CSS/Estilos.css">
        <style>
            fieldset {
                border: 1px solid #00539C;
                border-radius: 5px;
                padding: 10px;
                width: 50%;
                height: 50px;
                background-color: rgba(255, 255, 255, 0.8);
                margin: auto;
            }

            form {
                text-align: center;
            }

            fieldset label {
                color: #1E88E5;
            }
        </style>
    </head>
    <body>
        <br>
        <h1>
            CARGA DE DATOS
        </h1>
        <fieldset align = "center">
            <form action = "p_carga.php" method = "post" enctype = "multipart/form-data">
                Escoger archivo: solo (.xlsx)
                <input type = "file" name = "archivo" id = "">
                <input type = "submit" value = "Alimentar BD" name = "btnalimentarbd">
            </form>
        </fieldset>
    </body>
</html>