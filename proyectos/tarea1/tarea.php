<?php

// 1. Integer
$edad = 39 ; 

// 2. Float
$peso = 78.5; 

// 3. String
$nombre = "Leonardo Mafla. "; 

// 4. Boolean
$esDeportista = false; 

// 5. Array
$vehiculos = array("bicicleta", "moto", "avion", "barco", "tren");

// Operaciones aritméticas
$suma = $edad + $peso;
$cociente = $edad / $peso;

// Muestra Resultados
echo "La suma de la edad y el peso es: $suma " ;
echo "El cociente de la edad y la peso es: $cociente " ;

// Crea una variable de tipo cadena
$cadena1 = "Hola soy, ";

// Concatenación de dos cadenas
$cadenaConcatenada = $cadena1 . $nombre ; 

// Obtener la longitud de la cadena
$longitudCadena = strlen($cadenaConcatenada) ; 

// Mostrar los resultados
echo "Cadena concatenada: $cadenaConcatenada" ;
echo "Longitud de la cadena concatenada: $longitudCadena caracteres" ;

// Estructura de control condicional
if ($esDeportista) {
    echo " El usuario es un deportista." ;
} else {
    echo " El usuario no es un deportista." ;
}

// Mostrar un elemento específico del arreglo utilizando su índice
$vehiculo = 0;
$vehiculoEspecifico=$vehiculos[$vehiculo];
echo " El vehículo en el índice $vehiculo es: $vehiculoEspecifico";

?>
