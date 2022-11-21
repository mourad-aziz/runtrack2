<?php


 echo "<form method=\"post\" action=\"\">
    <select name=\"style\">
        <option value=\"style1\">style1</option>
        <option value=\"style2\">style2</option>
        <option value=\"style3\">style3</option>
    </select>
    <input type=\"submit\" value=\"Styler\" />
</form>";


    if(isset($_POST['style'])) echo $_POST['style'];


    echo "<head>";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style2.css\">";
    echo "</head>";

     echo "<link rel=\"stylesheet\" href=\$_POST[\"style\"].css>";

?>
