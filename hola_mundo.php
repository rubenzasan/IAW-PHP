<html lang="es">
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <h1>Cabecera</h1>
    <?php
    // Página básica para mostrar cómo funciona PHP
    echo '<p>Hola Mundo</p>';
    echo '<form>Nombre<input type="text"></form>';
    echo '<hr>';
    echo '<br>';
    ?>
    <p>HOLA</p>
    <?php
    // Declaración y asignación variables
    $texto = "textos";

    // Uso de variables
    echo $texto;
    echo "Admite varios", " " , $texto; ?>
    <br>
    <?= "<strong>Forma abreviada para hacer un echo</strong>"; ?>
    <?php
    // $2000 = "hola"   --> Esto daría error si se descomenta (no empezar por números)
    $s200 = "hola";
    $anyo = "2022";
    $sueldoFinal = "100000";
    $sueldo_final = "200000";

    $edad = 21;
    echo $variable; // Daría error porque no ha sido asignada previamente.
    $nombre = "Rodolfo";
    $gastos = 20000;
    $ingresos = 20000;
    $beneficios = ($gastos - $ingresos) * 0.7;
    ?>
</body>
</html>
