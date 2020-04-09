<?php
namespace This_Self;

/**
 * Class ConNguoi
 */
class ConNguoi
{
	
	public function getClass()
	{
		return "Đây là getClass của lớp Con Người";
	}

	public function echoClass()
	{
		echo self::getClass();
		echo "<br>";
		echo $this->getClass();
	}
}

/**
 * Class NguoiLon kế thừa lớp con người
 */
class NguoiLon extends ConNguoi
{
	
	public function getClass()
	{
		return "Đây là getClass của lớp Người Lớn";
	}
}

$nguoilon = new NguoiLon();

$nguoilon->echoClass();
?>