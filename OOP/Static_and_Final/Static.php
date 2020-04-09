<?php
namespace OOP\Static_and_Final;

/**
 * Khai bao lop ten co thuoc tính tĩnh static
 * thuộc tính tĩnh static chỉ lưu giá trị cuối cùng của lớp
 */
class Name
{
	private static $name = 'ABC';

	public function setName($name)
	{
		self::$name = $name;
	}

	public function getName()
	{
		echo self::$name;
	}
}

$name = new Name();

$name->setName('Vu Thanh Hai');
$name->getName();

echo "<br>";
$name2 = new Name();
$name2->getName();

echo "<br>";
//Gọi phương thức và thuộc tính tĩnh
Class Qua
{
	public static $tenqua = "quả táo";

	public static function TenQua()
	{	
		//Gọi thuộc tính tĩnh trong class
		echo self::$tenqua;
	}

	public static function DatTen()
	{
		//Gọi phương thức tĩnh trong class
		echo self::TenQua();
	}
}

//Gọi thuộc tính tĩnh
Qua::$tenqua;

//Gọi phương thức tĩnh
Qua::DatTen();
Qua::TenQua();
echo "<br>";

/**
 * Class con kế thừa class cha
 */
class QuaCam extends Qua
{
	
	public static function TenQua()
	{
		return self::$tenqua = "Quả cam";
	}

	public static function getQuaCam()
	{
		echo self::TenQua();
	}
}

$quacam = new QuaCam();

$quacam->getQuaCam();
?>