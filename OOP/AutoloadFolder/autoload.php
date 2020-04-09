<?php 
//Khai báo hàm __autoload  
function __autoload($className)  
{  
    echo 'Bạn vừa khởi tạo class: ' . $className;  
}  

//Khởi tạo class ConNguoi  
$connguoi = new ConNguoi();  
?>