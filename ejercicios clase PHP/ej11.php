<?php

//Dado un array de números, un número es “líder” si su valor es mayor que la suma de
//todos los números que se encuentran a su derecha. Escribir un programa que dado un
//array de números, devuelva otro array conteniendo los números líderes.

function encontrarLideres($arr) {
    $n = count($arr);
    $lideres = [];
    $maxDerecha = $arr[$n - 1];

    // El último número siempre es líder
    array_push($lideres, $maxDerecha);

    // Recorremos el array en sentido inverso (de derecha a izquierda)
    for ($i = $n - 2; $i >= 0; $i--) {
        if ($arr[$i] > $maxDerecha) {
            array_push($lideres, $arr[$i]);
            $maxDerecha = $arr[$i];
        }
    }

    // Invertimos el array para que esté en el orden original
    $lideres = array_reverse($lideres);

    return $lideres;
}

// Ejemplo de uso:
$arr = [16, 17, 4, 3, 5, 2];
$resultado = encontrarLideres($arr);
print_r($resultado);
