<?php
    
    /* Most Common Char in String

    Count the character that shows up most frequently in a given string.

    For example, in the string "aba", the most frequent character is "a".

    Other outputs:

    mostPopularChar("ababbab"); // 'b'

    mostPopularChar("abbas"); // ''. Both a and b are equal. No most popular char.  */

    function MostPopularChar($str = "ababbab")
    {
        $arr = str_split($str);
        $emp_arr = array();

        for ($i=0; $i < sizeof($arr) ; $i++)
        {
            (isset($emp_arr[$arr[$i]])) ? $emp_arr[$arr[$i]]++ : $emp_arr[$arr[$i]] = 1;
        }
        
        $max_value = 0;
        $max_key = "";

        foreach ($emp_arr as $key => $value)
        {
            if ($value > $max_value)
            {
                $max_value = $value;
                $max_key = $key;
            }
        }

        $check = 0;

        foreach ($emp_arr as $key => $value)
        {
            if ($max_value == $value)
            {
                $check++;
            }
        }
        
        if ($check == 1)
        {
            return "The most frequent character is: ".$max_key;
        } 
        else
        {
            return "Both a and b are equal. No most popular char";
        }
    }

    echo MostPopularChar();

?>