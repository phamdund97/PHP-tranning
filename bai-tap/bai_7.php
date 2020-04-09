<?php 

	/* Vowel Count

	Return the number (count) of vowels in the given string.

	We will consider a, e, i, o, and u as vowels. */

	function VowelCount($str = "daceh")
	{

		$sum = 0;
		$arr = array();

		for ($i=0; $i < strlen($str); $i++) { 
			if ($i == 0) {
				$arr[$i] = strlen($str);
			}
			else
			{
				$arr[$i] = (strlen($str) - $i) + $arr[$i - 1] - $i;
			}
		}

		for ($j=0; $j < strlen($str) ; $j++) { 
			if ($str[$j] == 'a' || $str[$j] == 'e' || $str[$j] == 'i' ||
				$str[$j] == 'o' || $str[$j] == 'u') {
				$sum += $arr[$j];
			}
		}

		return $sum;
	}

	echo VowelCount();

?>