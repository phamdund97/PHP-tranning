<?php 
namespace OOP\Constructor;

/**
 * Lop Meo cua ham khoi tao
 */
class Meo
{
	//Lop cha cho ham khoi tao goi ham getMeo
	function __construct()
	{
		return $this->getMeo();
	} 

	private function getMeo()
	{
		echo "Goi ham con meo!";
	}
}

// $meo = new Meo();

/**
 * Lop con cho ham khoi tao
 */
class MeoBaTu extends Meo
{
	// function __construct($message)
	// {
	// 	echo $message;
	// }
}

$mess = new MeoBaTu("Day la ham khoi tao lop con!");
?>