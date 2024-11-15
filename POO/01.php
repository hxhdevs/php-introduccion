<?php
include 'includes/header.php';
include 'includes/helper.php';

class Producto {

    public function __construct(public string $nombre,public int $precio, public bool $disponible)
    {
    }
    
}


$producto = new Producto('Monitor',200,300);
dep($producto);

$producto2 = new Producto('Tablet',100,500);
dep($producto2);

