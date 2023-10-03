<?php
//Crea un array de 5 números aleatorios entre 20 y 30, y muestralo.


// Inicializa un array para almacenar los números aleatorios
$numerosAleatorios = array();

// Genera 5 números aleatorios entre 20 y 30 y los agrega al array
for ($i = 0; $i < 5; $i++) {
    $numeroAleatorio = rand(20, 30);
    $numerosAleatorios[] = $numeroAleatorio;
}

// Muestra el array de números aleatorios
echo "Array de 5 números aleatorios entre 20 y 30:<br>";
print_r($numerosAleatorios);
?>



