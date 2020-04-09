<?php
include 'ConNguoi.php';

use NamespaceFolder as People;
use NamespaceFolder\ConNguoi;

//Định danh cho namespace
$connguoi = new People\ConNguoi();

echo $connguoi->getName();

echo "<br>";
//Sử dụng nạp namespace bằng use
$connguoi2 = new ConNguoi();

echo $connguoi2->getName();
?>