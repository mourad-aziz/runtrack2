<?php

$var1=true; $var2=19; $var3="une phrase"; $var4=3.9;
echo 'var1';
echo ' ,';
echo $var1;  //valeur variable
echo ' ,';
echo gettype( $var1 ); //type variable

//affichage entete tableau
$NbrCol = 3;
$tableau = array('Variable','Valeur','Type');
// $tableauVal= array(var[$k],$var[$k], gettype($var[$k]));
// -------------------------------------------------------
$NbreData = sizeof($tableau);
// -------------------------------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
$k = 0;
$j = 1;
echo '<table border="1">';
while ($k < $NbreData) {
   if ($j%$NbrCol == 1) {
      $NbrLigne++;
      echo "<tr>";
      $fintr = 0;
   }
   echo '<td>';
    // ------------------------------------------
    // AFFICHAGE de l'element
   echo $tableau[$k];
    // ------------------------------------------
   echo '</td>';
   $k++;
   if ($j%$NbrCol == 0) {
      echo "</tr>";
      $fintr = 0;
   }
   $j++;
}
if ($fintr!=1) { echo '</tr>'; }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>


