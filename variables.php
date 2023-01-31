<html lang="es">
<head>
    <title>Variables y Tipos</title>
</head>
<body>
    <h1>Variables bonitas</h1>
    <?php
    // Escribe aquí tu código
    $numero = 34;
    $negativo = -23;
    // Concatenar
    echo $negativo, $numero;
    echo "<br>";
    echo $negativo.$numero;

    echo "<br>";
    // Sumar
    echo $numero + $negativo;
    echo "<br>";

    // Octal y hexa
    $octal = 01234567;
    echo $octal;   // Lo transforma a decimal
    // $octal_incorrecto = 08;
    echo "<br>";

    $hexa = 0xFFF;
    $hexa2 = 0x123;
    $hexa3 = 0xae4400;
    echo $hexa3;  // Lo transforma a decimal
    echo "<br>";

    // Cadenas
    $cadena = "Hola a todo$";
    echo $cadena . "\n\r";  // No pasa de línea, solo en script
    echo $cadena;
    echo "<br>";
    print $cadena;
    echo "<br>";

    // Booleanos
    $verdadero = true;
    $falso = false;
    // ¿Qué muestra esta sentencia?
    echo $verdadero;
    echo "<br>";
    // ¿Y ésta?
    echo $falso;


    ?>
</body>
</html>
