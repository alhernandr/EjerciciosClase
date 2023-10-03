<?php

//Realizar un programa en el que se declare una variable de cada tipo de dato; Que se
//utilicen las comillas simples y dobles; que se concatenen varias cadenas; que se
//concatenen varias cadenas con sus valores correspondientes; que se realice la salida de
//una de las cadenas mediante echo y mediante print; que se declare una constante
//(mediante define y const); que se utilice var_dump(); donde se realice una conversión
//explícita de tipos; donde haga uso de referencias.


// Declaración de variables de diferentes tipos
$entero = 10;
$flotante = 3.14;
$cadena = 'Hola, ';
$cadena2 = "Mundo!";
$booleano = true;

// Concatenación de cadenas
$mensaje = $cadena . $cadena2;

// Concatenación de cadenas con valores correspondientes
$nombre = "Juan";
$edad = 30;
$informacion = "Mi nombre es $nombre y tengo $edad años.";

// Salida de una cadena mediante echo
echo $mensaje;
echo "<br>";

// Salida de una cadena mediante print
print($informacion);
echo "<br>";

// Declaración de una constante
define('PI', 3.14159265359);
const AUTOR = "John Doe";

// Uso de var_dump() para mostrar información sobre variables
var_dump($entero);
var_dump($flotante);
var_dump($cadena);
var_dump($booleano);
var_dump(PI);
var_dump(AUTOR);

// Conversión explícita de tipos
$numeroComoCadena = "42";
$numero = (int)$numeroComoCadena;
var_dump($numero);

// Uso de referencias
$original = 100;
$referencia = &$original;
$referencia = 200;
echo "El valor original es: $original"; 
?>