<?php

//Realizar un programa en PHP que muestre un valor al azar entre 1 y 6 con las caras de
//un dado. Para ello puedes utilizar la función rand(valor_inicio, valor_final) y realizar la
//captura de seis imágenes de un dado para hacerlo más visual.

//Genera un valor aleatorio entre 1 y 6
$valorAleatorio = rand(1, 6);

if($valorAleatorio==1){
    echo "<img src='./dados/1.png' alt='1'>";
} elseif ($valorAleatorio==2){
    echo "<img src='./dados/2.png' alt='2'>";
} elseif ($valorAleatorio==3){
    echo "<img src='./dados/3.png' alt='3'>";
} elseif ($valorAleatorio==4){
    echo "<img src='./dados/4.png' alt='4'>";
} elseif ($valorAleatorio==5){
    echo "<img src='./dados/5.png' alt='5'>";
} elseif ($valorAleatorio==6){
    echo "<img src='./dados/6.png' alt='6'>";
} 
?>
