<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Avatar</title>
</head>
<body>
    <?php
        echo "Nombre" . $_POST["nombre"]."<br>";

        var_dump($_FILES["avatar"]);
        echo "<hr>";
        // echo $_FILES["avatar"]["size"] . " bytes <br>";

        //(substr($_FILES["avatar"]["type"], 0, 5) == "image") and 

        //if ($_FILES["avatar"]["type"] == "image/jpg" or $_FILES["avatar"]["type"] == "image/png")
        
        if ($_FILES["avatar"]["size"] < 1024 * 1024) {
            // Subimos la imagen
            // move_uploaded_file(desde, hasta);
            $directorio = "images/";
            $fichero = $directorio.$_FILES["avatar"]["name"];
            // Mover desde /tmp/phpBLABLA -> images/nombre_fichero.ext
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $fichero);

            
            echo "<img src='$fichero' style='width: 300px;'>";
        } else {
            echo "Imagen demasiado grande"."<br>";
            echo "<a href='files_form.html'>Volver</a>";
        }
    ?>
</body>
</html>
