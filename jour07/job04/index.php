<?php
//Job 04
//Créez une fonction nommée “calcule()” qui prend 3 paramètres :
//●
//le premier, “$a”, est un nombre,
//●
//le deuxième, "$operation", est un caractère (string) contenant le type d’opération
//(+, -, *, /, %),
//●
//le troisième, “$b”, est un nombre.
//La fonction doit retourner le résultat de l’opération.

function calcule($a, $operation, $b) {
    if($operation=='+')
        $total=$a+$b;
    else if($operation=="-")
        $total=$a-$b;
    else if($operation=="x")
        $total=$a*$b2;
    else if($operation=="/")
        $total=$a/$b2;
    else if($operation=="%")
        $total=$a/$b2;
    return $total;
}

echo calcule( 1 ,"-" ,3 );
?>