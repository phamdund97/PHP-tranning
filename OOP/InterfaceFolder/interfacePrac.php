<?php
namespace OOP\InterfaceFolder;

interface A
{ 
	const constA = 'Gia tri constant';

	//Ham trong interface chi duoc dinh nghia khong duoc khai bao
	//Hàm trong interface chỉ ở dạng public
	public function Descript();

	public function Eat();
}

interface C extends A
{
	public function Sleep();
}

/**
 * Class B implements interface A
 */
class B implements C
{
	
	//Lớp implements interface cần khai báo đủ hàm/phương thức
	//của lớp interface.
	public function Descript()
	{
		echo $this->Eat();
		echo "<br>";
		echo $this->Sleep();
	}

	public function Eat()
	{
		echo "B eating!";
	}

	public function Sleep()
	{
		echo "B sleeped!";
	}
}

$b = new B();

$b->Descript();
?>