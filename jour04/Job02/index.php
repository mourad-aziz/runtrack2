<?php
/*Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :
Argument Valeur
prenom   Stephane
nom      Dupont*/

echo "<form action=\"\" method=\"get\">
    <h3> Tableau Methode GET </h3>
    Nom :     <input type=\"text\" name=\"nom\" />

    Age :     <input type=\"text\" name=\"age\" />

    Adresse : <input type=\"text\" name=\"adresse\" />

    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";

   if ( isset( $_GET['submit'] ) ) {

     $nom = $_GET['nom'];
     $age = $_GET['age'];
     $adresse = $_GET['adresse'];

     echo '<h3>Informations récupérées en utilisant GET</h3>';
     echo "<table>
     <thead>
         <tr>
             <th>Argument</th>
             <th>Valeur</th>

         </tr>
     </thead>
     <tbody>
         <tr>
             <td>Nom</td>
             <td>$nom</td>

         </tr>
         <tr>
             <td>Age</td>
             <td>$age</td>

         </tr>
         <tr>
             <td>Adresse</td>
             <td>$adresse</td>

         </tr>
     </tbody>
 </table>";
     exit;
  }
?>