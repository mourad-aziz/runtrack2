<?php
echo "<head>
    <title>Style Changer</title>
     <link rel=\\\"stylesheet\\\" href=\\\$_POST[\"style\"]>
    </head>";

 echo "<form method=\"post\" action=\"\">
    <select name=\"style\">
        <option value=\"style1.css\">style1.css</option>
        <option value=\"style2.css\">style2.css</option>
        <option value=\"style3.css\">style3.css</option>
    </select>
    <input type=\"submit\" value=\"Tester\" />
</form>";


    if(isset($_POST['style'])) echo $_POST['style'];
    if(isset($_POST['style'])) echo "<head>
    <title>Style Changer</title>
     <link rel=\\\"stylesheet\\\" href=\\\$_POST['style']>
    </head>";


    echo "<link rel=\"stylesheet\" href=\$_POST['style']>";

?>