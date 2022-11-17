<?php
/* Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.*/

$str="I'm sorry Dave I'm afraid I can't do that";

 for ($i = 0; isset($str[$i]) ; $i+=1) {
    if ($str[$i] == "a" || $str[$i] == "e" ||$str[$i] == "i" ||$str[$i] == "o" ||$str[$i] == "u" || $str[$i] == "A" ||$str[$i] == "E" || $str[$i] == "I" ||$str[$i] == "O" || $str[$i] == "U" ) {
     echo $str[$i];
    }

}

?>