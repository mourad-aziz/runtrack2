<?php

echo "<div id=\"wb_Form1\" style=\"position:absolute;width:385px;height:196px;\">
<form name=\"contact\" method=\"post\" action=\"<?php echo basename(__FILE__); ?>\" enctype=\"multipart/form-data\" id=\"Form1\">
<input type=\"hidden\" name=\"formid\" value=\"form1\">
<label for=\"Editbox1\" id=\"Label1\" style=\"position:absolute;left:10px;top:15px;width:35px;height:16px;line-height:16px;z-index:7;\">Name:</label>
<input type=\"text\" id=\"Editbox1\" style=\"position:absolute;left:63px;top:15px;width:190px;height:16px;z-index:8;\" name=\"name\" value=\"\" spellcheck=\"false\">
<label for=\"Editbox2\" id=\"Label2\" style=\"position:absolute;left:10px;top:46px;width:35px;height:16px;line-height:16px;z-index:9;\">Email:</label>
<input type=\"text\" id=\"Editbox2\" style=\"position:absolute;left:63px;top:46px;width:190px;height:16px;z-index:10;\" name=\"email\" value=\"\" spellcheck=\"false\">
<input type=\"submit\" id=\"Button1\" name=\"\" value=\"Send\" style=\"position:absolute;left:63px;top:77px;width:96px;height:25px;z-index:11;\">
</form>
</div>";


?>