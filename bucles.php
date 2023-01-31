<html lang="es">
<head>
    <title>Bucles</title>
</head>
<body>
    <h1>Bucles</h1>
    <?php
    $repetir = true;
    $parar = false;

    // ¿Cuántas veces escribe "Sigue"?
    while($repetir) {
        echo "Sigue<br>";
        if($parar == true) {
            $repetir = false;
        }
        // Hacer cosas en la base de datos
        $parar = true;
    }

    // While para rescribir 10 veces "soy el elemento N"
    $i = 0;
    while($i < 10) {
        echo "Soy el elemento $i <br>";
        // echo "Soy el elemento ". $i . "<br>";
        $i++;
    }

    echo "<h1>Ahora con FOR</h1>";
    // For para rescribir 10 veces "soy el elemento N"
    for($i = 0; $i < 10; $i++) {
        echo "Soy el elemento $i <br>";
    }

    echo "<h1>Lista con While</h1>";
    // Lista con while
    echo "<ul>";
    $i = 1;
    while($i < 11) {   // Equivalente a ($i <= 10)
        echo "<li>Soy el elemento $i </li>";
        // echo "Soy el elemento ". $i . "<br>";
        $i++;
    }
    echo "</ul>";

    echo "<h1>Lista ordenada con For</h1>";

    /* Crea una lista <ol> con 12 elementos <li> creados con un bucle de tipo for.
        Cada elemento de la lista será <li>Soy el elemento n</li> donde n es el
        número de iteración del bucle, excepto el primero que será <li>Soy el primer
        elemento</li> y el último que será <li>Soy el último elemento</li>.
     */

    // Una forma de hacerlo
    echo "<ol>";
    // Bucle
    for($i=1; $i<=12; $i++) {
        if ($i == 1) {
            echo "<li>Soy el primer elemento</li>";
        } elseif ($i >= 2 && $i <= 11) {
            echo "<li>Soy el elemento $i </li>";
        } else {
            echo "<li>Soy el último elemento</li>";
        }
    }
    echo "</ol>";

    // Otra forma de hacerlo
    echo "<ol>";
    // Bucle
    for($i=1; $i<=12; $i++) {
        if ($i == 1) {
            echo "<li>Soy el primer elemento</li>";
        } elseif ($i == 12) {
            echo "<li>Soy el último elemento</li>";
        } else {
            echo "<li>Soy el elemento $i</li>";
        }
    }
    echo "</ol>";

    ?>
</body>
</html>