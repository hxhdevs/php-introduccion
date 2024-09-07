<?php

$carrito = ['Tablet','Computadora','Telefono'];

var_dump(in_array('Tablet',$carrito));
var_dump(in_array('Tamagoshi',$carrito));


//
$numeros = array(1,2,3,4,5,1,2);
sort($numeros);// de menor a mayor
rsort($numeros);//de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

$cliente = array(
    'saldo'=>200,
    'tipo'=>'Premium',
    'nombre'=>'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);//Ordena por valores
arsort($cliente);//Ordena por valores z primero

ksort($cliente);//Ordena por valor alfabetico
krsort($cliente);//Ordena por valor alfabetico invertido

echo "<pre>";
var_dump($cliente);
echo "</pre>";










?>