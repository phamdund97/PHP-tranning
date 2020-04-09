<?php
namespace OOP\Inheritance;

/**
 * Class lớp cha trong kế thừa
 */
class DongVat
{
	var $mat = "";
	var $mui = "";
	var $chan = "";

	function an()
	{
		echo "Động vật đang ăn!";
	}
}

/**
 * Class lớp con trong kế thừa
 */
class ConTrau extends DongVat
{
	function intro()
	{
		$this->mat = "Đây là mặt";
		$this->mui = "Đây là mũi";
		parent::an();
	}
}

$contrau = new ConTrau();

$contrau->intro();
echo "<br>";
echo $contrau->mat;
?>