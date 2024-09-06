<?php

$nombreCliente= "Hector Elih";
echo strlen($nombreCliente);//imprimimos la longitud de l a variable incluyendo espacios
echo strtoupper('<br>'.$nombreCliente);
echo strtolower('<br>'.$nombreCliente);

$mail ="correo@correo.com";
$mail2 ="correo@correo.com";

echo ('<br>');
var_dump(strtolower($mail)===strtolower($mail2));
echo ('<br>');
echo str_replace('Hector','H', $nombreCliente);

//Revisar si un string existe o no
echo ('<br>');
echo strpos($nombreCliente,'Pedro');
var_dump(strpos($nombreCliente, 'Pedro'));

$tipoCliente ="Premium";
echo ('<br>');
echo "El cliente ".$nombreCliente." es ".$tipoCliente;
echo ('<br>');
echo "El cliente {$nombreCliente} es {$tipoCliente}";


?>