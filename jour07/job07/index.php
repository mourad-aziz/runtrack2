<?php
//job7

echo "<form  action=\"\"
method=\"POST\" >
<input type=\"text\" value=\"\" title=\"\" name=\"str\" <minuscule/> >
<select name=\"ComboBox1\" title=\"\" >
<option value=\"gras\" selected=\"selected\">gras</option>
<option value=\"cesar\">cesar</option>
<option value=\"\">plateforme</option>
</select>
<input name=\"Button1\" type=\"submit\" value=\"submit\" title=\"\">

</form>";

 //echo "<form method=\"post\" action=\"\">
//    <select name=\"style\">
//        <option value=\"gras\">gras</option>
//        <option value=\"cesar\">cesar</option>
//        <option value=\"laplateforme\">laplateforme</option>
//    </select>
//    <input type=\"submit\" value=\"submit\" />
//</form>";

if ( isset( $_POST['submit'] ) ) {

    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    echo $fonction;
    echo $str;
}

function cesar($str, $decalage) {
    $from = 'abcdefghijklmnopqrstuvwxyz';
    $to   = substr($from, $decalage) . substr($from, 0, $decalage);
    return strtr($str, $from, $to);
}
function gras($str){
    if ( preg_match('~^\p{Lu}~u', $string) ) {
    echo "<b>\"{$string}\"</b> starts with uppercase.";
} else {
    echo "\"{$string}\" does not start with uppercase.<br>";
}
}

$string = "abcdefghijklmnopqrstuvwxyz";
// test 1st char casse
if ( preg_match('~^\p{Lu}~u', $string) ) {
    echo "<b>\"{$string}\"</b> starts with uppercase.";
} else {
    echo "\"{$string}\" does not start with uppercase.<br>";
}
echo "<b> cesar </b>";
echo cesar($string, 1);

?>