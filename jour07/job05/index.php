<?php
//Job 05
//Créez une fonction nommée “occurrences($str, $char)”.
//Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
//caractère nommé “$char”.
//Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
//Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
//$str sera : 2

function occurrences($str, $char)
{


    $res = 0;

    for ($i = 0; $i < strlen($str); $i++)

        // checking character in string
        if ($str[$i] == $char)
            $res++;

    return $res;
}

    // Driver Code
    $str= "Bonjour";
    $char = 'o';
    echo occurrences($str, $char) ;
    return 0;


?>