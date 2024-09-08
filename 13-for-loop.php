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
echo '<br>----------<br>';

for ($i=0; $i < 100; $i++) { 
    if ($i %3 === 0 && $i %5 === 0) {
        echo $i.'- FIZZ BUZZ</br>';
    }elseif ($i%3 === 0) {
        echo $i . "- Fizz <br/>";
    }elseif ($i % 5 === 0) {
        echo $i ."- Buzz </br>";
    }else {
        echo $i .'<br/>';
    }
}

?>