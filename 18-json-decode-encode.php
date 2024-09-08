<?php
$productos =[
    [
    'nombre'=>'Tablet',
    'precio'=> 200,
    'disponible'=> true
    ],
    [
    'nombre'=>'Television 24"',
    'precio'=> 300,
    'disponible'=> true
    ],
    [
    'nombre'=>'Monitor Curvo',
    'precio'=> 400,
    'disponible'=> false
    ]
];

echo '<pre>';
// var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array=json_decode($json);

var_dump($json);
var_dump($json_array);