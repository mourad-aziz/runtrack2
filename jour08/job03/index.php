<?php
//Job 03
//Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
//submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
//session. Afficher l’ensemble des prénoms.
//Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
session_start();
print "<form id=\"form1\" name=\"form\" action=\"http://\" method=\"POST\" enctype=\"text/plain\" target=\"_self\">
    <input id=\"prenom_ID\" name=\"prenom\" value=\"prenom\">
    <input id=\"submit\" name=\"submit\" type=\"submit\" value=\"submit\">
    <input id=\"reset\" name=\"reset\" type=\"reset\" value=\"reset\">
</form>";

if ( isset( $_POST['submit'] ) ) {
    echo 'add name';
    if($_POST[submit] == 'submit'){
        $_SESSION['prenom'] = $_SESSION['prenom'];
        echo var_dump($SESSION['prenom']);
    // else {
    //        session_destroy();

    }
    //}
    print "<form id=\"form1\" name=\"form\" action=\"http://\" method=\"POST\" enctype=\"text/plain\" target=\"_self\">
    <input id=\"prenom_ID\" name=\"prenom\" value=\"prenom\">
    <input id=\"submit\" name=\"submit\" type=\"submit\" value=\"submit\">
    <input id=\"reset\" name=\"reset\" type=\"reset\" value=\"reset\">
</form>";
echo var_dump($SESSION['prenom']);
    }
//}

?>