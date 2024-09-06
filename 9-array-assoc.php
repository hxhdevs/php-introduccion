<?php

$cliente =[
    'nombre'=>'Hector',
    'saldo'=> 200,
    'informacion' =>[
        'tipo'=>'premium',
        'disponible'=>100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 1201207887;//Agregamos otra propiedad no definida al inicio
echo "<pre>";
var_dump($cliente);
echo "</pre>";

?>