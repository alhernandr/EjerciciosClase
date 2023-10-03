<?php
// Crea y muestra un array con los números pares entre 1 y 100.

// Inicializa un array para almacenar los números pares
$numerosPares = array();

// Usa un bucle for para encontrar los números pares entre 1 y 100
for ($i = 2; $i <= 100; $i += 2) {
    $numerosPares[] = $i;
}

// Muestra el array de números pares
echo "Números pares entre 1 y 100:<br>";
foreach ($numerosPares as $numero) {
    echo $numero . ", ";
}
?>