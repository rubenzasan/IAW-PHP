<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ejercicio1.php" method="get">
    <label>¿Cuántos osos quieres crear?
        <input type="number" name="ositos">
    </label>
    <button type="sumbit">Añadir</button>
        <button id="borrar">Borrar todos</button>
</form>

    <div class="osos">
        <!-- Crea aquí los osos -->
    </div>

    <script>
        // Escribe aquí tu código javascript
        /* Cuando se pulse el botón 'Añadir' tiene que añadir tantas imágenes de osos como se haya puesto en 'number'
        * Cuando se dé a 'Borrar' se deberán borrar todos
        * */
    <?php
    
    echo $_GET["ositos"] . " ositos tengo que crear"
for($i = 0; $i < $_GET["ositos"]; i++) {
echo "<img src='images'/oso.png'"

}

    ?>
    </script>
</body>
</html>