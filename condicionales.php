<html lang="es">
<head>
    <title>Condicionales</title>
</head>
<body>
    <h1>Condicionales</h1>
    <p>Hola</p>
    <?php
    // Conexión a la BBDD
    $puede_editar = false;
    $puede_borrar = true;
    ?>
    <br>
    <table>
        <tr>
            <td>Valores</td>
            <td>Cosas</td>
        </tr>
    </table>

    <?php
    //  Puedo seguir usando esas variables en este trozo de php
    // if($puede_editar == true) {    // Es equivalente a lo anterior
    if($puede_editar) {
        echo "Puede editar<br>";
        echo "<textarea name='sinopsis'></textarea>";
        echo "<button>Guardar</button>";
        if($puede_borrar) {
            echo "<button>Borrar</button>";
        } else {
            echo "No puedes borrar nada!";
        }
    }

    // Variable tipo_rol: admin, editor, usuario normal
    $tipo_rol = "admin";

    if ($tipo_rol == "admin") {
        echo "Eres armin";
    } elseif ($tipo_rol == "editor") {
        echo "Eres editor";
    } elseif ($tipo_rol == "usuario") {
        echo "eres usuario normal";
    } else {
        echo "No válido";
    }

    // Switch: días de la semana
    echo "<br>";
    echo "<h1>Día de la semana</h1>";
    $hoy = 5;
    switch($hoy) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:  // Agrupación de case 6 y 7 (se quita el break del 6)
        case 7:
            echo "Es fin de semana. Te doy el día libre";
            break;
        default:
            echo "Introduce un número del 1 al 7";
    }

    // Restaurante con ifs
    echo "<br>";
    echo "<h1>Puntuación de restaurante</h1>";
    $puntuacion = 3;
    if($puntuacion === 0) {
        echo "Fatal todo";
    } elseif ($puntuacion === 1) {
        echo "Mal";
    } elseif ($puntuacion === 2) {
        echo "Regu";
    } elseif ($puntuacion === 3) {
        echo "Bien";
    } elseif ($puntuacion === 4 || $puntuacion === 5) {
        echo "Genial";
    } else {
        echo "Introduce un valor válido";
    }

    ?>
</body>
</html>