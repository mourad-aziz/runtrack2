<?php
if (isset( $_POST['style'] )) {echo "<head>
    <title>Style Changer</title>
     <link rel=\\\"stylesheet\\\" href=\\\$_POST[\"style\"]>
    </head>";

}



 echo "<form method=\"post\" action=\"\">
    <select name=\"style\">
        <option value=\"style1.css\">style1</option>
        <option value=\"style2.css\">style2</option>
        <option value=\"style3.css\">style3</option>
    </select>
    <input type=\"submit\" value=\"Styler\" />
</form>";


    //if(isset($_POST['style'])) echo $_POST['style'];
    if(isset($_POST['style'])) echo "<head>";

    $style = $_POST['style'];
    //echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style2.css\">";
    echo "<head>";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\$_POST[\"style\"] media=\"all\"\">";
    echo "</head>";
   // echo $_POST["style"];

    //echo "<head>";
    //echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"\\"$style\">";
    //echo "<link rel=\"stylesheet\" type=\"text/css\" href=\$_POST[\"style\"].css media=\"all\"\">";
    //echo "</head>";
    //echo $_POST["style"];
    // echo "<link rel=\"stylesheet\" href=\$_POST[\"style\"].css>";
 //<link href="../layout/css/styles.php" rel="stylesheet" type="text/css" media="all" />;


?>