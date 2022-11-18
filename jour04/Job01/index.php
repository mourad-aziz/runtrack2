<?php
/*Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “*/

echo "<form action=\"\" method=\"get\">
    <h3> Argument Methode GET </h3>
    Nom :     <input type=\"text\" name=\"nom\" />

    Age :     <input type=\"text\" name=\"age\" />

    Adresse : <input type=\"text\" name=\"adresse\" />

    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";
if ( isset( $_GET['submit'] ) ) {
    $g =0;
    foreach ( $_GET as $get => $val )  {
        if ($val !== null) {  $g+=1;
        }
    }
    $g-=1;
echo "Le nombre d’argument GET envoyé est : $g";

     exit;
  }
?>




