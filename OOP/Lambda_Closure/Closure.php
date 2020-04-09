<?php  

$number = 1;  

$getNextNumber = function () use (&$number) {  

    return ++$number;  

};  

$getPreNumber = function () use (&$number) {  

    return --$number;  

};  

echo $getNextNumber();  

//kết quả: 2  

echo "<br>".$number;  

// Kết quả: 2  

echo "<br>".$getPreNumber();  

//Kết quả: 1  
?>