<?php
include 'includes/header.php';
include 'includes/helper.php';

class Producto {//Definiendo la clase con propiedades publicas
    public $nombre;
    public $precio;
    public $disponible;
    // Al declarar las propiedades como public, permitimos que sean accesibles y modificables desde fuera de la clase.
}

// Instanciar de la clase
$producto = new Producto();
var_dump($producto->nombre);
var_dump($producto->nombre ='Nen');
var_dump($producto->precio =200);
var_dump($producto->disponible =true);

dep($producto);

// Instanciar de la clase 2
$producto2 = new Producto();
var_dump($producto2->nombre);
var_dump($producto2->nombre ='Specialized');
var_dump($producto2->precio =200);
var_dump($producto2->disponible =true);
dep($producto2);

//En este bloque estamos obteniendo 2 instancias de la clase es decir podemos reasignar diferentes valores por objeto en resumen
// Este código muestra cómo crear una clase, instanciarla en objetos diferentes, asignar y visualizar valores de sus propiedades. Cada objeto ($producto y $producto2) tiene sus propios valores de propiedades, y ambos se pueden modificar independientemente.