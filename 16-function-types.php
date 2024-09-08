<?php

function usuarioAutenticado(){
    return 'Usuario autenticado';
}
$usuario = usuarioAutenticado();
echo $usuario;

//Funcion que retorna un valor
function authUser(bool $user) : ?string{
    if ($user) {
        return "</br>The user is auth";
    }else {
        // return '</br>bool false';
        return null;//simplemente no imprime nada
    }
}
$user = authUser(true);
echo $user;

?>