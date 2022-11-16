<?php

$txt = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$tab = ['a','e','i','o','u','A','E','I','O','U'];
$tab2 = ['B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Y','Z','b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];
$totv = 0;
$totc = 0;

foreach($tab as $voyelle){
 $totv += substr_count(strtolower($txt), $voyelle);
 }
foreach($tab2 as $consonne){
 $totc += substr_count(strtolower($txt), $consonne);


}

/*echo $totv.' voyelles';
echo "<br>";
echo $totc.' consonnes';
echo "<br>";*/

echo "<table style=\"border-size: 2px; border-color: #FF0000; border-collapse: collapse\">
    <tr>
        <td>voyelles</td>
        <td>consonnes</td>
    </tr>
    <tr>
        <td>$totv</td>
        <td>$totc</td>
    </tr>
</table>";

?>