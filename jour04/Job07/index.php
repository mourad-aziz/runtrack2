<?php
/*Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :*/

//todo draw the house

echo "<form action=\"\" method=\"get\">
    <h3> Maison en ASCII </h3>
    largeur :     <input type=\"number\" name=\"largeur\" />
    hauteur :     <input type=\"number\" name=\"hauteur\" />
    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";

   if ( isset( $_GET['submit'] ) ) {

     $largeur = $_GET['largeur'];
     $hauteur = $_GET['hauteur'];
     if($largeur <= 2 || $hauteur <= 2) {
        echo "les dimmensions ne sont pas conformes avec le code de l'urbanisme";
    } else {

            echo "<span style=\"color: #B45A22\">La toiture seras livrée ultérieurement</span><br>";
            echo "<canvas id=\"myCanvas\" width=\"$largeur\" height=\"$hauteur\" style=\"border:1px solid #000000;\"> </canvas> ";
    /*for ($i = 0; $i < $largeur; $i++) {
        echo "<pre>__</pre>";
        for ($i = 0; $i < $hauteur; $i++) {
             echo "<pre>|</pre>";
             echo "<pre> </pre>";
             echo "<pre>/</pre>";
             echo "<pre>\</pre>";
             echo "<pre>__</pre>";
        }
    }*/
    }


     exit;
  }


?>