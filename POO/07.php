<?php
include 'includes/header.php';
include 'includes/helper.php';
// Polimorfismo es en parte una mezcla entre herencia con interfaz
// Refiere a que los objetos pueden tener diferentes formas de comportarse(polimorfismo).
// Es cuando diferentes clases implementan(abstraen) una sola interfaz

interface TransporteInterfaz {//Aplicamos una interfaz para poder 
    public function getInfo() : string;
    public function getRuedas() : int;
}

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

class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){
        //Aqui podemos modificar el constructor para recibir mas datos, es decir lo podemos sobreescribir agregandole mas mas variables, podemos sobreescribir getInfo

    }

    public function getInfo() : string{
        return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas y es de color ".$this->color;
    }

    public function getColor() : string{//Podemos agregar un metodo diferente a los que hereda de la clase padre o interfaz
        return "El color es ".$this->color;
    }
}
echo "<hr>";
dep($transporte = new Transporte(8,20));
dep($auto = new Automovil(8,20,'Chiclamino'));
echo $transporte->getInfo();
echo "<hr>";
echo $auto->getInfo();
echo "<hr>";
echo $auto->getColor();

// Polimorfismo significa que una misma interfaz (o clase base) puede ser implementada o extendida por diferentes clases, y cada clase puede definir su propia versión de los métodos (sobrescribirlo) usando el metodo heredado en si (sin sobrescribirlo).

// Esto permite que objetos de diferentes clases se comporten de manera uniforme cuando se utilizan desde el mismo contexto, lo que facilita la extensibilidad y el manejo uniforme de objetos.