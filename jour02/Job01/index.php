<?php
/*Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
chaque nombre (<br />).
Le nombre 42 doit être en gras et souligné (<b><u>...).*/

for ($i = 0; $i < 1338; $i++)
     if ($i !=42) {
         echo $i;
         echo '<br>';
         }
    else {
          echo "<b><u>$i</u></b>";
            echo '<br>';

         }


?>