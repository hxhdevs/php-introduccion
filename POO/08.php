<?php include 'includes/header.php';

// require 'Clases/Clientes.php';
// require 'Clases/Detalles.php';

function mi_autoload($file){
    require __DIR__ . '/Clases/'.$file.'.php';
    // hacer uso de $clase sobre la funcion implica que de manera implicita esta apuntando a las clases
}

spl_autoload_register('mi_autoload');//esta funcion de PHP recibe la funcion como string y la ejecuta de manera automatica

$detalles = new Detalles();
$clientes = new Clientes();


// ¿Qué es spl_autoload_register?
// Es una función nativa de PHP que permite registrar una o más funciones (o métodos estáticos) que se ejecutarán automáticamente cada vez que se intente usar una clase que no ha sido cargada previamente.
// Esto elimina la necesidad de usar require o include manualmente para cada archivo de clase, lo que resulta en un código más limpio y mantenible.

// Relación directa con las clases: $clase apunta de manera implícita al nombre de la clase faltante porque PHP lo pasa automáticamente. Solo necesitas asegurarte de que el nombre de la clase coincida con el nombre del archivo donde está definida.
// Flexibilidad dinámica: Puedes construir rutas específicas o aplicar lógica adicional según el nombre de la clase (por ejemplo, manejar namespaces o convenciones de nombres distintas).