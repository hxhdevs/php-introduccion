<?php
$autenticado = true;
$admin = true;

// if ($autenticado || $admin) {
if ($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
}else {
    echo "Usuario incorrecto";
}

$cliente = [
    'nombre'=>'Juan',
    'saldo'=>200,
    'informacion'=>[
        'tipo'=>'Premium'
    ]
];
echo '<br>';
if (empty($cliente)) {
    echo "El arreglo de cliente esta vacio";
} else {
    echo "El arreglo de cliente no esta vacio";
}
echo '<br>';

if (!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";
    echo '<br>';
    if ($cliente['saldo']>0) {
        echo 'El cliente tiene saldo disponible';
    }else {
        echo "No hay saldo";
    }
}

echo '<br> -----<br>';
if ($cliente['saldo']>0) {
    echo 'El cliente tiene saldo';
}else if ($cliente['informacion']['tipo']==='Premium') {
    echo "El cliente es Premium";
}else {
    echo 'No hay cliente definido o no tiene saldo o no es Premium';
}

echo '<br> -----<br>';
//Switch
$tecnologia = 'PHP';

switch($tecnologia){
    case 'PHP':
        echo 'Un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'El lenguaje de la Web';
        break;
    case 'HTML':
        echo 'Emmmmm...';
        break;
    default:
    echo 'Algun lenguaje indefinido';
    break;
}

?>