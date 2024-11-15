<?php
include 'includes/header.php';
include 'includes/helper.php';

class Producto {
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre,int $precio,bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
    
}


$producto = new Producto('Monitor',200,300);
dep($producto);

$producto2 = new Producto('Tablet',100,500);
dep($producto2);

