<?php
include 'includes/header.php';
include 'includes/helper.php';
// Las interfaces permiten agrupar un grupo de declaraciones de funciones pero no las implementa
// Solo funciona como un plano de las funciones o metodos que tiene una clase.
// En resumen nos dice que metodos tiene una clase y que hacen y que tipos de datos retorna pero no nos dice como lo hace
//De modos que a la hora de llamar los metodos a la interfaz se tiene que especificar que tipo de datos devolvera


interface TransporteInterfaz{//definimos la interfaz, de donde proviene en base a implements sobre la clase afectada
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz {//con implements definimos que la clase podra ser usada por una interfaz
    public function __construct(protected int $ruedas, protected int $capacidad){

    }
    
    public function getInfo() : string{
        return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas";
    }

    public function getRuedas(): int{
        return $this->ruedas;
    }
}

// Las interfaces no afectan la herencia de clases:
// Una clase que implementa una interfaz puede:
// -Extender otra clase.
// -Ser extendida por otras clases.
// -Ser independiente.


// Las interfaces no tienen propiedades ni implementaciones:
// -Solo especifican qué métodos deben implementarse, no cómo.
// -Las propiedades y su lógica deben ser definidas en las clases que las implementan o heredan.

// Todas las clases, ya sean hijas o directamente implementadoras, deben cumplir con los métodos definidos en la interfaz.
// En resumen, las interfaces y la herencia pueden coexistir perfectamente. Las interfaces complementan la herencia al establecer contratos que aseguran consistencia en las clases, independientemente de su posición en la jerarquía.