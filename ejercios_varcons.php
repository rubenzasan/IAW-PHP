<html lang="es">
<head>
    <title>Variables y Constantes</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <?php
    // Escribe aquí tu código

    // Una variable de cada tipo
    $examen = 10;
    $octaloso = 0777;
    $string = "Soy una cadena";
    $numero = 27;
    $comprobador = true;

    // Una constante de cada tipo
    define("EXAMEN", 10);
    const OCTALOSO = 0777;
    define("NUMERO", 27);
    define("CADENA", "Soy una constante en minúsculas");

    echo CADENA;

    // Reasignar una constante a otro valor ¿qué sucede?
    // EXAMEN = "Patatas"; No se puede
    ?>
</body>
</html>
