<html lang="es">
<head>
    <title>Ejercicios Funciones</title>
</head>
<body>
    <h1>Ejercicios Funciones</h1>
    <?php

    // Crea una función que reciba un precio y lo devuelva con el IVA del 21%.
    function devolver_iva($precio, $iva=0) {
        // Primero validamos
        if(is_numeric($precio) && is_numeric($iva)) {
            $iva = 1 + $iva/100;
            return $precio * $iva;
        } else {
            echo "$precio y $iva TIENEN QUE SER NUMÉRICOS";
        }
    }

    echo devolver_iva(30, 21) . "<br>";

    echo devolver_iva("diez", 21) . "<br>";

    // Que si no metes el iva devuelva el número tal cual, que el IVA sea 0
    echo devolver_iva(50) . "<br>";

    /* Crea una función que reciba cuatro números y los devuelva sumados. */
    function sumar4($num1, $num2, $num3, $num4) {
        return $num1 + $num2 + $num3 + $num4;
    }
    echo sumar4(1, 3, 4, 8) . "<br>";

    echo "<hr>";

    /* Crea una función que reciba un array de números y devuelva un valor con
    todos los números del array sumados */
    function suma_array($array) {
        $total = 0;

        // Recorre el array y suma sus elementos
        $i = 0;
        while($i < count($array)) {
            $total = $total + $array[$i];
            $i++;
        }

        return $total;
    }

    // Un array
    $array = array(2, 4, 6, 7, 9);
    $suma = suma_array($array);
    echo $suma . "<br>";

    // Otro array
    $nums[] = 99;
    $nums[] = 10;
    $nums[] = 1;
    echo suma_array($nums) . "<br>";

    // Otra forma metiendo el array como parámetro (sin crearlo antes)
    echo suma_array(array(9, 55, 2));
    echo "<br>";

    // Forma PRO/Fácil, usando una función de php
    echo array_sum($nums);

    echo "<hr>";

    /*Crea una función que devuelva el número de elementos que tiene un array
    sin usar la función count(), es decir, contando los elementos con bucles*/
    function contar($array) {
        $contador = 0;

        // Cuento los elementos
        foreach ($array as $elemento) {
            $contador++;
        }

        return $contador;
    }

    echo "<hr>";

    echo contar(array("Pepe", true, 1));
    echo "<br>";
    $cuantos = contar($array);
    echo "El segundo array tiene $cuantos elementos<br>";

    // Forma alternativa
    function contar2($array) {
        $continua = true;
        $contador = 0;

        while($continua) {
            // Si tiene valor ese elemento, lo suma
            if (isset($array[$contador])) {
               $contador++;
            } else {  // Sino, hemos llegado al final del array
                $continua = false;
            }
        }
        return $contador;
    }

    echo contar2($array) . "<br>";

    echo "<hr>";
    // Refactorización del anterior

    function contar3($array) {
        $contador = 0;

        while(isset($array[$contador])) {
            $contador++;
        }
        return $contador;
    }
    echo contar3($array) . "<br>";

    ?>
</body>
</html>