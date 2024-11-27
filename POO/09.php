<?php include 'includes/header.php';

use App\Clientes;
use App\Detalles;

function mi_autoload($clase){
    $partes = explode('\\',$clase);
    require __DIR__ . '/Clases/'.$partes[1].'.php';
}

spl_autoload_register('mi_autoload');

$detalles = new Detalles();
$clientes = new Clientes();

// Los namespaces son una funcionalidad de PHP que permite organizar el código dentro de "espacios de nombres" para evitar conflictos entre nombres de clases, funciones y constantes cuando se trabaja en proyectos grandes o se usan múltiples librerías.
// Un namespace es una forma de encapsular clases, funciones y constantes bajo un identificador único (el nombre del espacio). Actúan como una "carpeta lógica" que organiza el código y evita conflictos de nombres.

// ¿Qué implican los namespaces?
// Resolución de nombres: Para acceder a una clase o función en un namespace, necesitas especificar el namespace completo, como App\Clientes, o usar use para importar el namespace.
// Separación lógica: Permiten separar lógicamente las partes del proyecto, especialmente útil en equipos grandes o cuando se integran librerías externas.
// Autoloading: Funcionan bien con sistemas de autoloading como PSR-4, donde la estructura de namespaces se alinea con la estructura de carpetas.

// ¿Cuándo usar namespaces?
// Proyectos grandes: Donde hay muchas clases, funciones o constantes, y es probable que haya nombres repetidos.
// Integración de librerías: Para evitar conflictos entre el código del proyecto y librerías externas.
// Frameworks modernos: Casi todos los frameworks de PHP (como Laravel, Symfony) utilizan namespaces para organizar el código.
// Seguimiento de estándares: Usar namespaces es fundamental para cumplir con los estándares de PHP-FIG (como PSR-4).

// ¿Por qué usarlas?
// Evitar conflictos de nombres: Si dos clases tienen el mismo nombre, pueden coexistir en namespaces diferentes.
// Mejor organización: Los namespaces permiten organizar el código en "módulos" o "dominios" dentro del proyecto.
// Compatibilidad con autoloading: Es más fácil configurar el autoloading para cargar clases automáticamente.
// Legibilidad: Ayudan a identificar la procedencia de una clase o función fácilmente.

// Ventajas de usar namespaces
// Evitan colisiones:
// Dos clases con el mismo nombre pueden existir sin problemas en diferentes namespaces.
// Facilitan el autoloading:
// Con estándares como PSR-4, la estructura de namespaces coincide con la estructura de carpetas.
// Organización del código:
// Puedes agrupar clases y funciones relacionadas dentro de un mismo namespace.
// Integración con librerías externas:
// Los namespaces aseguran que las clases del proyecto no entren en conflicto con las librerías externas.


// Desventajas de usar namespaces
// Curva de aprendizaje:
// Para principiantes, puede ser confuso entender cómo funcionan los namespaces, especialmente la resolución de nombres.

// Configuración adicional:
// Necesitas configurar correctamente el autoloading (PSR-4 o similar) para que funcione bien con namespaces.

// Complejidad inicial:
// En proyectos pequeños, usar namespaces puede parecer innecesariamente complicado.

// ¿Qué es PSR-4? Es una especificación para la auto carga de clases desde la ruta de los archivos. Describe dónde se encuentran ubicados los archivos que serán autocargados.