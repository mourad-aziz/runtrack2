<?php
/*Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
●
si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
●
sinon afficher : “Votre pire cauchemar”.*/

echo "<form action=\"\" method=\"post\">
    <h3> Password Methode POST </h3>
    username :     <input type=\"text\" name=\"username\" />

    password :     <input type=\"password\" name=\"password\" />



    <input type=\"submit\" name=\"submit\" />
</form>
<br>
";

   if ( isset( $_POST['submit'] ) ) {

     $username = $_POST['username'];
     $password = $_POST['password'];
     if ($username=='John' && $password == 'Rambo' ) {
         echo "C’est pas ma guerre" ;
        }

        else {
        echo "Votre pire cauchemar";
     }

    }

?>