<?php
namespace OOP\Multi_Method_oneLine;

/**
 * Class: MyClass
 */
class MyClass
{
	
	private $name;

	public function setName($name)
	{
		$this->name = $name;

		//trả về đối tượng hiện tại
		//$this tại đây trả thẳng 1 object
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}
}

$myclass = new MyClass();

//Gọi nhiều phương thức trong một dòng
echo $myclass->setName("Con người")->getName();
?>