<?php
//Declara un array con los valores: 1, 2, ‘antonio’, 200, ‘pepe’. Recorre el array empezando
//por el último elemento, ‘pepe’, mostrando cada elemento en una línea separada.

// Declara un array con los valores
$miArray = array(1, 2, 'antonio', 200, 'pepe');

// Obtiene el número de elementos en el array
$numeroElementos = count($miArray);

// Recorre el array comenzando desde el último elemento
for ($i = $numeroElementos - 1; $i >= 0; $i--) {
    echo $miArray[$i] . "<br>";
}
?>
