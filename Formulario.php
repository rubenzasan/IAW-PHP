<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>
<body>
<h1>Formulario</h1>
<form action="" method="get">
    Nombre: <input type="text" name="nombre"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Edad: <input type="number" min="0" max="99" name="edad"><br>
    e-mail: <input type="email" name="email"><br>
    ¿Aceptas las condiciones?
    <select name="cond">
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select><br>
    <input type="submit" value="Enviar" name="submit">
</form>
</body>
</html>
