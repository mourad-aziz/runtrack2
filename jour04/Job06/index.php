<?php
/*Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
●
si la valeur entrée est un nombre pair, afficher “Nombre pair”,
●
si c’est un nombre impair, afficher “Nombre impair”.*/

 echo "<form action=\"\" method=\"get\">
    <h3> Parité </h3>
    nombre :     <input type=\"number\" name=\"nombre\" />

    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";

   if ( isset( $_GET['submit'] ) ) {

     $nombre = $_GET['nombre'];
     if($nombre % 2 == 0) {
        echo 'Nombre pair';
    } else {
        echo 'Nombre impair';
    }



     exit;
  }
?>



