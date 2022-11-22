<?php

    function leetSpeak($str)
    {   $lettre = array("A", "B", "E", "G", "L", "S", "T");
        $leet = array("4", "8", "3", "6", "1", "5", "7");
        $result = '';
        for ($i = 0; $i < strlen($str); $i++)
        {
            $char = $str[$i];

            if (false !== ($pos = array_search($char, $lettre)))
            {
                $char = $this->leet[$pos]; //Change the char to l33t.
            }
            $result .= $char;
        }
        return $result;
    }
 $string="AZERTYUIOPQSDFGHJKLM";
 echo leetSpeak($string);

?>