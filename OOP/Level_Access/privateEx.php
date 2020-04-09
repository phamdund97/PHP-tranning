<?php
namespace OOP\Level_Access;

error_reporting(0);

/**
 * Lớp mèo 
 */
class Meo 		
{
	private $loaiMeo;
	var $tenmeo = "Mèo Anh";

	function getLoaiMeo()
	{
		return $this->theLoaiMeo;
	}

	function setLoaiMeo($loaiMeo)
	{
		$this->theLoaiMeo = $loaiMeo;
	}

	private function xoaLoaiMeo()
	{
		echo "Bạn đang yêu cầu xóa loại mèo!";
	}
}

/**
 * Khởi tạo lớp đối tượng mèo
*/
$meo = new Meo();

//Gán giá trị cho thuộc tính loại mèo
$meo->setLoaiMeo('Mèo ba tư');

echo $meo->getLoaiMeo();

echo "<br>";
/**
 * Lớp con - mèo anh
 */
class MeoAnh extends Meo
{
	function printInfo()
	{
		echo $this->$tenmeo;

		$this->setLoaiMeo('Mèo Anh!');

		echo $this->getLoaiMeo();
	}
}

$meoanh = new MeoAnh();

$meoanh->printInfo();
?>