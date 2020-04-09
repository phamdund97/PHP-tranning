<?php 
	
	/* Reverse Vowels In A String

	your goal is to write a function which will reverse the vowels in a string. Any characters which are not vowels should remain in their original position. Here are some examples:

	 

	reverseVowels("Hello!"); // "Holle!"

	reverseVowels("Tomatoes"); // "Temotaos"

	reverseVowels("Reverse Vowels In A String") // "RivArsI Vewols en e Streng"

	 

	For simplicity, you can treat the letter y as a consonant, not a vowel. */

	function reverse_vowels($str = "Reverse Vowels In A String")
	{

	    $vowels       = ['a','e','i','o','u','A','E','I','O','U'];
	    $reverse = [];

	    $chars = str_split($str);
	    $reverse = array_intersect($chars, $vowels);
	    $reverse = array_combine(
	        array_keys($reverse),
	        array_reverse($reverse)
	    );
	    $chars = array_replace($chars, $reverse);

	    return implode('', $chars);
	}

	echo "Strings after reversed is: ".reverse_vowels();
?> 