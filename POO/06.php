<?php
include 'includes/header.php';
include 'includes/helper.php';
//Clases abstractas 

// Una clase abstracta no se puede instanciar, mayormente solo sirve de base para heredar metodos a sus clases hijas y estas puedan hacer uso de ella.
// Es decir una clase abstracta no puede ser utilizada para crear objetos por sí misma. 
// Solo las clases hijas que extienden (heredan) la clase abstracta tienen acceso a su funcionalidad.
// Es perfecta para definir comportamientos comunes y garantizar que las clases hijas implementen ciertos métodos clave que se esperan.
abstract class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad){

    }
    
    public function getInfo() : string{
        return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas";
    }

    public function getRuedas(): int{
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte{
    
    public function getInfo() : string {
        return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas y NO GASTA GASOLINA";
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){

    }

    public function getTransmision() : string{
        return $this->transmision;
    }
}
$transporte = new Transporte(1,3);//Esto no es válido porque las clases abstractas no pueden ser instanciadas directamente.
echo $transporte->getInfo();

echo "<hr>";

$bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4,4,' con transmision manual');
echo $auto->getInfo();
echo $auto->getTransmision();


// Las clases abstractas sirven como plantillas para que las clases hijas las hereden, y al tener una clase abstracta tambien deben serlo los metodos
// Conclusión
// Las clases abstractas son excelentes para definir plantillas y asegurarte de que las clases hijas implementen ciertos métodos específicos.
// Métodos abstractos ayudan a garantizar consistencia en las clases derivadas.
// Reutilizar el constructor y métodos de la clase padre mejora la modularidad y reduce la duplicación de código.