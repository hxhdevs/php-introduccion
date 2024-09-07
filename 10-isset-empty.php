<?php
$clientes =[];
$clientes2 =array();
$clientes3 = array('Hector','Elih','Nammen');
$cliente =[
    'nombre' =>'Elih',
    'saldo' => 100
];
//Empty - solo checa si esta vacio o no un array devuelve un boolean
var_dump( empty($clientes));
var_dump( empty($clientes2));
var_dump( empty($clientes3));
var_dump( empty($clientes4));

//Isset - Revisa si un arreglo esta creado o una propiedad esta definida
echo '<br>';
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));
var_dump( isset($clientes4));

var_dump( isset($cliente['nombre']));//podemos revisar si existe una propiedad
var_dump( isset($cliente['codigo']));//podemos revisar si existe una propiedad

?>