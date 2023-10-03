<?php
//Realizar un programa que cada vez que se ejecute muestre 
//tu nombre a un tamaño elegido al azar entre 200% y 700%.

// Genera un tamaño de fuente aleatorio entre 200% y 700%
$tamanioFuente = rand(200, 700);

// Imprime tu nombre con el tamaño de fuente generado
echo "<div style='font-size: {$tamanioFuente}%;'>Álvaro</div>";
?>