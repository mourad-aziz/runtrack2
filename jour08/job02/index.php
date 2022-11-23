<?php
$total_count = 0;
if(isset($_COOKIE['count'])){
$total_count = $_COOKIE['count'];
$total_count ++;
}

setcookie('count', $total_count);

if($total_count == 0){
echo "Bienvenue.";
} else {
echo "Nombre de visite ".$total_count;

}
?>