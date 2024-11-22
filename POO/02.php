<?php
include 'includes/header.php';
include 'includes/helper.php';

class Producto {
    // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // Protected - se puede acceder / solo se puede modificar dentro de la clase
    // Private - solo pueden acceder miembros de la clase

    public function __construct(protected string $nombre,public int $precio, public bool $disponible)
    {
    }
    // En el contexto de PHP, los tipos de retorno (:void, :string, etc.) se utilizan para especificar qué tipo de valor un método debe devolver.    
    public function mostrarProducto() : void{// Indica que el método no devuelve ningún valor.
        echo "El producto es: ".$this->nombre.' y su precio es '.$this->precio;//usamos this para apuntar a las variables dentro de la clase
    }

    public function getNombre() : string{// Indica que el método debe devolver un valor de tipo string.
        //Esto basicamente es una funcion para obtener el valor de nombre con esto apuntamos al valor de nombre que paso por el constructor
        return $this->nombre;
        
    }
    public function setNombre(string $nombre){//Con este metodo podemos reescribir el valor de nombre a travez de un parametro recibido al instanciar el metodo
        $this->nombre = $nombre;
        // echo $nombre;
    }
}


$producto = new Producto('Tablet',200,true);
echo $producto->getNombre();
$producto->setNombre('Nuevo dispositivo');
dep($producto);

$producto2 = new Producto('Monitor',300,true);
echo $producto2->getNombre();
$producto2->setNombre('Nuevo monitor');
dep($producto2);
