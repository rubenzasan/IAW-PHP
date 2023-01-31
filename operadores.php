<html lang="es">
<head>
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
    $numero1 = 1;
    $numero2 = 2;

    echo $numero1 + $numero2;
    echo "<hr>";
    echo $numero1 - $numero2;
    echo "<hr>";
    echo $numero1 * $numero2;
    echo "<hr>";
    echo $numero1 / $numero2;
    echo "<hr>";
    echo $numero2 % $numero1;
    echo "<hr>";

    // Comparación
    echo $numero2 > $numero1;
    echo "<hr>";
    echo $numero1 > $numero2;

    echo "<hr>";
    echo !false;
    echo "<hr>";
    echo !true;

    if (!true == false) {
        echo "HOLA";
    } else {
        echo "ADIÓS";
    }

    $es_simpatico = true;
    $es_admin = true;  // Viene de la base de datos (ya lo veremos)
    if(!$es_admin) {
        echo "Eres un usuario raso";
    }

    if ($es_admin && $es_simpatico) {  // Los 2 tienen que ser true
        echo "Qué admin más salao";
    } else {
        echo "Puede que no seas admin o seas un antipático";
    }

    $es_pelirrojo = false;
    if ($es_admin || $es_pelirrojo) {  // Alguno tiene que ser true
        echo "Eres admin, eres pelirrojo o las dos";
    }

    ?>
    <br>
</body>
</html>