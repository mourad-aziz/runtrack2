<?php
/*Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.*/

for ($i = 0; $i < 101; $i++)

if (($i >= 0 && $i <= 20))

   {echo "<i>$i</i><br>";}

   else if(($i > 20 && $i < 25)) {
   echo "$i<br>";
    }

   else if(($i >= 25 && $i <= 50) && $i !=42) {
   echo "<u>$i</u><br>";
    }

    else if($i > 50) {
   echo "$i <br>";
    }

    else if($i = 42) {
   echo "La Plateforme_ <br>";
    }



?>

