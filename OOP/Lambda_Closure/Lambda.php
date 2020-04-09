<?php
namespace Lambda_Closure;

$lambda = function(){
	return 'ABC';
};

echo $lambda();

//Sử dụng hàm ẩn danh như một tham số trong hàm
function getRole($role)
{
	return $role();
}

echo getRole(function(){
	return "<br>This is the rule!";
});

//Sử dụng hàm ẩn danh như một tham số trong class
/**
 * Lớp MyClass cho hàm ẩn danh
 */
class MyClass
{

	public $number;

	public function __construct($number)
	{
		$this->number = $number;
	}

	function getNumber($number)
	{
		return $number();
	}
}

$mynumber = new MyClass(function(){
	return "12345";
});

$data = $mynumber->number;

echo "<br>".$data();

echo "<br>".$mynumber->getNumber(function(){
	return "4598475984";
});
?>