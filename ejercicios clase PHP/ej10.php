<?php
// Recibes una string de valores separados por coma. Debes eliminar del string los valores
//duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por
///ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará:
//1,2,3,2,4,1,5
//1,2,3,4,5

function eliminarDuplicados($cadena) {
    // Dividir la cadena en un array de valores separados por comas
    $valores = explode(',', $cadena);
    
    // Eliminar duplicados usando la función array_unique
    $valoresSinDuplicados = array_unique($valores);
    
    // Convertir el array de valores sin duplicados de nuevo en una cadena
    $cadenaSinDuplicados = implode(',', $valoresSinDuplicados);
    
    return $cadenaSinDuplicados;
}

$cadenaOriginal = "1,2,3,2,4,1,5";
$cadenaSinDuplicados = eliminarDuplicados($cadenaOriginal);

echo "Cadena original: " . $cadenaOriginal . "\n";
echo "Cadena sin duplicados: " . $cadenaSinDuplicados . "\n";
?>

