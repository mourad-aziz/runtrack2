<?php
//Job 01
//Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
//visitée, ajoutez 1. Afficher le contenu de cette variable.
//Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.

//session_start()
//if ($_SESSION["nbvisites"] > 0 ) {
//    $_SESSION["nbvisites"]=$value++;
//} else {
//
//}
// $_SESSION["nbvisites"]=$value;
//echo
session_start();

if(isset($_SESSION['page_count']))
{
    $_SESSION['page_count'] += 1;
}
else
{
    $_SESSION['page_count'] = 1;
}
 echo 'Nombre visite  ' . $_SESSION['page_count'];

print "<form name=\"Form1\" method=\"post\" action=\"\">
<input type=\"submit\" id=\"Button1\" name=\"reset\" value=\"reset\" >
</form>";
if ( isset( $_POST['submit'] ) ) {
    echo 'reset demander';
    if($_POST[submit] == 'reset'){
        $_SESSION['page_count'] = 0;
    }
    var_dump($_POST['submit']);
    }
//$_SESSION['page_count'] = 0;

 print "<input type=\"submit\" id=\"Button2\" name=\"reset\" value=\"Reset\"> ";
var_dump($_SESSION);
if ( !isset( $_POST['submit'] ) ) {
    //echo 'reset demander';

    //$_SESSION['page_count'] = null;
    var_dump($_POST);
    }

?>