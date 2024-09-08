<?php
//While
$i=0;

while ($i <= 10) {
    echo $i . '<br>';
    
    $i++;
}

echo '<br>----------<br>';
//Do while
$i = 0;
do {
    echo $i . '<br>';
    $i++;
} while ($i <= 10);

echo '<br>----------<br>';

$i = 10;
for ($i=0; $i < 10; $i++) { 
    echo $i.'<br>';
}
/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 FIZZ BUZZ
 **/ 
echo '<br>-----Cambiando for e ifs tradicionales a endif y endfor-----<br>';

for ($i=0; $i < 100; $i++):
    if ($i %3 === 0 && $i %5 === 0) :
        echo $i.'- FIZZ BUZZ</br>';
    elseif ($i%3 === 0) :
        echo $i . "- Fizz <br/>";
    elseif ($i % 5 === 0) :
        echo $i ."- Buzz </br>";
    else:
        echo $i .'<br/>';
    endif;
endfor;

echo '<br>----------<br>';
//For each
$clientes = array('Pedro','Juan','Karen');

foreach($clientes as $cliente){
    echo $cliente.'</br>';
}
echo '<br>----------<br>';
echo count($clientes);
echo sizeof($clientes);
echo '<br>----------<br>';

for ($i=0; $i < count($clientes); $i++) { 
    echo $clientes[$i].'<br/>';
}

echo '<br>-----Otra forma de ejecutar un while-----<br>';
while ($i <= 10):
    echo $i . '<br>';
    
    $i++;
endwhile;
echo '<br>----------<br>';
$cliente = [
    'nombre' => 'juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];
echo '<br>-----Imprimiendo con foreach-----<br>';

foreach ($cliente as $key) {
    echo $key;
}

echo '<br>-----Imprimiendo keys(elemento) y value(valor) del array con foreach-----<br>';
foreach ($cliente as $key => $value) {
    echo $key . ' => '.$value.'</br>';
}


?>