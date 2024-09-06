<?php

$carrito =['Skypi','Triller Bark','Shabondy'];

//Util para ver arrays formateados
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Acceder a un elemento en el array
echo $carrito[1];
//Agregando un elemento al carrito despues del ultimo indice hay que saber cuantos tiene
echo '<br>';
$carrito[3]='Dress Rosa';
var_dump( $carrito);
//Añadir un elemento al ultimo
echo '<br>';
array_push($carrito,'Whole Cak');
var_dump( $carrito);
//añadir al inicio
echo '<br>';
array_unshift($carrito,'Wano');
var_dump( $carrito);
// ========================================
echo "<pre>";
var_dump($carrito);
echo "</pre>";


?>