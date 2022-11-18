<?php
/*Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “*/

echo "<form action=\"\" method=\"post\">
    <h3> Argument Methode POST </h3>
    Nom :     <input type=\"text\" name=\"nom\" />

    Age :     <input type=\"text\" name=\"age\" />

    Adresse : <input type=\"text\" name=\"adresse\" />

    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";
if ( isset( $_POST['submit'] ) ) {
    $g =0;
    foreach ( $_POST as $post => $val )  {
        if ($val !== null) {  $g+=1;
        }
    }
    $g-=1;
echo "Le nombre d’argument POST envoyé est : $g";

     exit;
  }
?>



