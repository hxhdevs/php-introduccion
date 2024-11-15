<?php
include 'includes/header.php';
include 'includes/helper.php';

class Producto {

    public function __construct(public string $nombre,public int $precio, public bool $disponible)
    {
    }
    
    public function mostrarProducto(){
        echo "El producto es: ".$this->nombre.' y su precio es '.$this->precio;//usamos this para apuntar a lass variables dentro de la clase
    }
}


$producto = new Producto('Monitor',200,300);
echo "El producto es: ".$producto->nombre.' y su precio es '.$producto->precio;//Forma incorrecta accediendo a las variables publicas
echo "<hr>";
$producto->mostrarProducto();//Forma de obtener a travez de metodo
dep($producto);
echo "<hr>";
echo "<hr>";
$producto2 = new Producto('Tablet',100,500);
echo "El producto es: ".$producto2->nombre.' y su precio es '.$producto2->precio;//Forma incorrecta accediendo a las variables publicas
echo "<hr>";
$producto2->mostrarProducto();//Forma de obtener a travez de metodo
dep($producto2);

