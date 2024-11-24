<?php
include 'includes/header.php';
include 'includes/helper.php';
// Herencia de clases

// La clase Transporte actúa como la clase base (padre), y las clases Bicicleta y Automovil son clases derivadas (hijas).
// Las clases hijas heredan las propiedades y métodos de la clase base, pero también pueden sobrescribir métodos (como getInfo en Bicicleta) o agregar nuevos métodos y propiedades (como getTransmision en Automovil).
class Transporte{
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

$bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4,4,' con transmision manual');
echo $auto->getInfo();
echo $auto->getTransmision();

// Herencia te permite reutilizar código de la clase base en múltiples clases derivadas.
// Sobrescribir métodos te da flexibilidad para personalizar el comportamiento en las clases hijas.
// Reutilizar el constructor y métodos del padre, mantiene el código DRY (Don't Repeat Yourself).
// Validaciones en el constructor protegen contra datos inválidos.