<html lang="es">
<head>
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
    $numeros = array(1,2,3,4,54,56,67,7,4,3,23,32,34534,34,3,34,345,6,6,7);
    echo $numeros[0];  // Primer elemento
    echo "<br>";
    $cuantos = count($numeros);
    echo $cuantos;
    echo "<br>";
    var_dump($numeros);

    // Recorrer el array y mostrar un número en cada línea
    for($i = 0; $i < $cuantos; $i++) {
        echo $numeros[$i] . "<br>";
    }

    // Heterogéneos: elementos de distinto tipo
    $ht = array(12, 23.12, "Pepito", true);
    echo count($ht);
    var_dump($ht);
    echo "<br>";

    // Frutas
    $frutas = array("manzana", "naranja", "aguacate", "plátano");
    echo $frutas[2];
    $frutas[4] = "mandarina";  // Meter último elemento (FEO)

    // Meter último elemento (BONITO)
    $frutas[count($frutas)] = "piña";
    $frutas[10] = "tomate";

    // Meto luego el 8 (después del 10)
    echo "<br>";
    $frutas[8] = "chirimoya";
    echo $frutas[8];

    echo "<br>";
    var_dump($frutas);  // ¿Qué pasa aquí con el orden?

    echo "<hr>";
    // Recorrer el array. ¿Qué pasa?
    for($i = 0; $i < count($frutas); $i++) {
        echo $frutas[$i] . "<br>";
    }

    // Sumar y mostrar todos los elementos del array que sean numéricos
    echo "<hr>";

    $asumar = array(1, "pepito", 22, true, "patata", 100, 0.99);  // 123.99

    $total = 0;
    for($i = 0; $i < count($asumar); $i++) {
        // Sumar solo los numéricos
        if(is_numeric($asumar[$i])) {
            $total = $total + $asumar[$i];
        }
    }
    echo $total;

    // ¿Por qué no se puede usar array_sum()?
    // https://www.php.net/manual/en/function.array-sum.php

    echo "<hr>";
    $numeros2 = array(1, 2, 3, 4, 5, 6);
    echo array_sum($numeros2);
    ?>
</body>
</html>