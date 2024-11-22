<?php
include 'includes/header.php';
include 'includes/helper.php';
//Metodos estaticos
class Producto {
//     Se definen usando el modificador static.
// No tienen acceso directo a las propiedades o métodos no estáticos de la clase, ya que no dependen de una instancia.
public static $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";
    public function __construct(protected string $nombre,public int $precio, public bool $disponible, string $imagen)
    {
        if ($imagen) {
            self::$imagenPlaceholder = $imagen;
            //self se usa dentro de una clase para referirse a sí misma (la clase en general) cuando trabajas con propiedades o métodos estáticos.
            // Se pueden llamar directamente usando el operador :: con el nombre de la clase, sin necesidad de instanciar un objeto a diferencia de $this que es para propiedades no estaticas.
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }
    
    public static function obtenerProducto(){
        echo "Obteniendo datos del producto";
    }

    public function mostrarProducto() : void{
        echo "El producto es: ".$this->nombre.' y su precio es '.$this->precio;
    }

    public function getNombre() : string{
        return $this->nombre;
        
    }
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

// Los métodos y propiedades estáticos en PHP tienen un propósito específico: pertenecen a la clase en sí, no a una instancia de la clase. Esto significa que puedes acceder a ellos sin crear un objeto (sin instanciar la clase).
echo Producto::obtenerProducto();
// No usa $this, porque $this hace referencia a la instancia actual (un objeto), y los métodos estáticos no dependen de una instancia.
echo "<br>";

$producto = new Producto('Tablet',200,true,'');
echo $producto->obtenerImagenProducto();
echo $producto->getNombre();
$producto->setNombre('Nuevo dispositivo');
dep($producto);

$producto2 = new Producto('Monitor',300,true,'GreenPic.jpg');
echo $producto2->obtenerImagenProducto();
echo $producto2->getNombre();
$producto2->setNombre('Nuevo monitor');
dep($producto2);