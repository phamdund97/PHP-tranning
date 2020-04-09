<?php

	function CommastoNumber($number = -1000000.123)
	{
		list($whole, $decimal) = explode('.', $number);
		$format_number = number_format($number, strlen($decimal), '.', ',');
		return $format_number;
	}

	echo "The number after added commas is: ".CommastoNumber();
?>