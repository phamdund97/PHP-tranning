<?php
namespace OOP\Abstract_Class;

/**
 * Lop final MyClass
 * Khong duoc ke thua boi nhung ham khac
 * 
*/
final class MyClass
{
	protected $name;

	protected $id;

	public function showInfo()
	{
		echo "Day la ham hien thi thong tin";
	}
}

$myclass = new MyClass();
$myclass->showInfo();
echo "<br>";
/**
 * Lop cha binh thuong co phuong thuc final
 */
class TenClass
{
	
	final public function printInfo()
	{
		echo "Day la ham final hien thi thong tin!";
	}
}

/**
 * Lop con ke thua lop cha: TenClass
 */
class OneClass extends TenClass
{
	
	public function Go()
	{
		echo $this->printInfo();
	}
}

$oneclass = new OneClass();
$oneclass->Go();
?>