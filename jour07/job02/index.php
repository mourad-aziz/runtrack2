<?php
//Job 02
//Créez une fonction nommée “bonjour($jour)”.
//Cette fonction prend en paramètre un booléen nommé “$jour”.
//Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
//Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.

function bonjour($jour){
    if ($jour == true) {
     echo "Bonjour";
    } else if($jour == false) {
     echo "Bonsoir";
    } else {
     echo "argument true or false";
    }
}
echo bonjour(true);
echo "<br>" ;
echo bonjour(false);
?>