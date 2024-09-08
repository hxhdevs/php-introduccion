<?php

declare(strict_types=1);
// El uso de declare(strict_types=1) en PHP establece un modo de tipado estricto para el archivo en el que se utiliza. Este tipo de declaración asegura que los tipos de datos pasados a las funciones sean estrictamente respetados según lo especificado.


function sumar($numero1, $numero2){
    echo 'Simple Function '. $numero1+$numero2;
}
sumar(10,20);
echo '</br>';

//El siguiente es la suma con valores por default
//Puede ejecutarse con solo una variable al tener un valor por defecto
function sumar2($numero1=0, $numero2=0){
    echo 'Default Value '. $numero1+$numero2;
}
sumar2(10);
echo '</br>';
//ejecutando la funcion con tipado de datos
function sumar2typing(int $numero1=0, int $numero2=0){
    echo 'Strong Typing '.$numero1+$numero2;
}
// sumar2typing(10,'ok');//esto no es admitido
sumar2typing(10,7);//esto no es admitido
echo '</br>';
//ejecutando la funcion con tipado de datos bool
function sumarconBool(int $numero1=0, bool $numero2){
    echo 'Bool '.$numero1+$numero2;
}
sumarconBool(10,true);
echo '</br>';
//ejecutando la funcion con tipado de datos float
function sumarconFloat(int $numero1=0, float $numero2){
    echo 'Float '.$numero1+$numero2;
}
sumarconFloat(10,3.1416);
echo '</br>';
//Named Parameters en PHP
function namedParameters(int $numero1, int $numero2){
    echo $numero1;
    echo '</br>Simple Function with named Parameters '. $numero1+$numero2;
}
namedParameters(numero1: 10, numero2: 20);//el papametro nombrado se puede pasar como la variable pero sin signo de $ 
echo '</br>';
?>