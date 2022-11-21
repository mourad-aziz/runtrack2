<?php
/*Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :
Argument  Valeur
prenom    Stephane
nom       Dupont*/
echo "<form action=\"\" method=\"post\">
    <h3> Tableau Methode POST </h3>
    Nom :     <input required type=\"text\" name=\"nom\" />

    Age :     <input required type=\"number\"  min=\"0\" value=\"18\"name=\"age\" />

    Adresse : <input required type=\"text\" name=\"adresse\" />

    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";

   if ( isset( $_POST['submit'] ) ) {

     $nom = $_POST['nom'];
     $age = $_POST['age'];
     $adresse = $_POST['adresse'];

     echo '<h3>Informations récupérées en utilisant POST</h3>';
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