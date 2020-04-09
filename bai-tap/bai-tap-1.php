<?php
	
	/* Dãy String: fun&!! time */
	$sen1 = "fun&!! time";

	$word1 = str_word_count($sen1, 1);

	function LongestWord($a, $b) {
	    return strlen($b) - strlen($a);
	}

	usort($word1, 'LongestWord');

	print_r(array_shift($word1)); 


	/* Dãy String : I Love Dogs */
	echo "<br/>";
	$sen2 = "I love dogs";
	$word2  = explode(' ', $sen2);

	$longestWordLength = 0;
	$LongestWord = '';

	foreach ($word2 as $word) {
	   if (strlen($word) > $longestWordLength) {
	      $longestWordLength = strlen($word);
	      $LongestWord = $word;
	   }
	}

	echo $LongestWord;
?>