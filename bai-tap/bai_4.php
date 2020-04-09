<?php

    /* Backspaces in string

        Assume "#" is like backspace in string. This means that string "a#bc#d" actually is "bd"

        Your task is to process a string with "#" symbols.

        Examples

        "abc#d##c"      ==>  "ac"

        "abc##d######"  ==>  ""

        "#######"       ==>  ""

        ""              ==>  "" */

    function BackSpaceInString($str = "a#bc#d")
    {
        $arr = str_split($str);
        $empty_arr = array();

        if (empty($arr))
        {
            return "";
        } 
        elseif (!in_array("#", $arr))
        {
            return impole("", $arr);
        }  
        else
        {
            for ($i=0; $i < sizeof($arr) ; $i++) 
            { 
                if ($arr[$i] != "#")
                {
                    array_push($empty_arr, $arr[$i]);
                } 
                else
                {
                    if (!empty($empty_arr))
                    {
                        array_pop($empty_arr);
                    }
                }
            }
            return implode("", $empty_arr);;
        }
    }

    echo "The result for back space in string which you entered is: ".BackSpaceInString();
?>