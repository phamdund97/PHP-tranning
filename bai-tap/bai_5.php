<?php

    /* Numbers in strings

    In this, you will be given a string that has lowercase letters and numbers. Your task is to compare the number groupings and return the largest number.

    For example, solve("gh12cdy695m1") = 695, because this is the largest of all number groupings. */

    function solve($str = "gh12cdy695m1")
    {
        $arr = str_split($str);
        $new_arr = array();
        $number = " ";

        for ($i=0; $i < sizeof($arr) ; $i++)
        {
            if ((is_numeric($arr[$i])) && (isset($arr[$i+1])) && (!is_numeric($arr[$i+1])))
            {
                
                $number .= $arr[$i];
                array_push($new_arr, (int)$number);
                $number = " ";
            } 
            elseif (is_numeric($arr[$i]))
            {
                $number .= $arr[$i];
            }
        }

        rsort($new_arr);
        return $new_arr[0];
    }

    echo "The largest number in string is: ".solve();

?>