<?php
//Job4
//Créez un formulaire de connexion qui contient un input de type de text nommé
//“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
//prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
//plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
//bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
//nouveau afficher le formulaire de connexion.

print "<form id=\"form1\" name=\"form\" action=\"http://\" method=\"POST\" enctype=\"text/plain\">
    <input id=\"prenom\" name=\"prenom\" value=\"prenom\">
    <input id=\"connexion\" name=\"connexion\" type=\"submit\" value=\"connexion\">
</form>";
if(isset($_COOKIE['prenom'])){
$prenom = $_COOKIE['prenom'];

}

setcookie('prenom', $prenom);

?>