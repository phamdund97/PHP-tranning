<?php

	/* Array Exchange and Reversing

	It's time for some array exchange! The objective is simple: To exchange between two arrays but with one catch; the content of the exchanged array must be reversed.

	Input:

	my_array = ['a', 'b', 'c']

	other_array= [1, 2, 3]

	my_array.exchange_with!(other_array)

	The expected output:

	my_array = [3, 2, 1]

	other_array = ['c', 'b', 'a'] */

	function ExchangeArray()
	{
		$arrf = array('a', 'b', 'c');
		$arrs = array(1, 2, 3);
		$temp = array();

		$temp = $arrf;
		$arrf = array_reverse($arrs);
		$arrs = array_reverse($temp);

		echo "The first array: ";
		print_r($arrf);
		echo "<br>";
		echo "The second array: ";
		print_r($arrs);
	}

	ExchangeArray();
?>