<?php
namespace OOP\Abstract_Class;

/**
 * Khai bao lop abstract
 */
abstract class MyClass
{
	public $name;

	abstract protected function hello();

	abstract public function hi();
}

/**
 * Lop con ke thua ham adstract cha: MyClass
 */
class OneClass extends MyClass
{
	
	//Khai bao day du ham cua lop cha va viet lai
	public function hello()
	{
		echo $this->hi();
		echo "<br>";
		echo $this->hiz();
	}

	protected function hiz()
	{
		echo "Hiz xin chao!";
	}

	public function hi()
	{
		echo "Ham hi xin chao";
	}
}

$xinchao = new OneClass();
$xinchao->hello();
?>