<html lang="es">
<head>
    <title>Variables y Tipos</title>
</head>
<body>
    <h1>Variables bonitas</h1>
    <?php
$cadena = 'Tener un hijo, plantar un árbol y escribir un libro es fácil. Lo dificil es criar un niño, regar el árbol y que alguien lea el libro.';
$arraycadena = array($cadena);
 echo "Muestra el carácter 2 tratando la cadena como un array";
 echo "<hr>";
echo $cadena[2];
echo "<hr>";
 //cuantos caracteres tiene
echo strlen($cadena);
echo "<hr>";
//cuantos caracteres sin espacios
echo strlen(str_replace(' ','',($cadena)));
echo "<hr>";
//Cuantas palabras tiene?
 echo str_word_count($cadena);
echo "<hr>";
 //cuenta el número de "e" que hay en el texto.
 echo substr_count($cadena, 'e');
 echo "<hr>";
 //Devuelve la cadena al revés y en mayúsculas
echo strrev(strtoupper($cadena));
echo "<hr>";
 //Reemplaza niño por hijo
 echo str_replace("niño", "hijo", $cadena);
 echo "<hr>";
?>
</body>
</html>
