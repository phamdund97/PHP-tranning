<?php
	function LetterChanges($str = "fun times!") {  
	  $string = str_split($str);
	  $alphabet = range("a","z");
	  $upper = array('a', 'e', 'i', 'o', 'u');
	  foreach($string as $key => $value){
	    if(in_array($value,$alphabet)){
	      $string[$key] = $value=='z' ? 'a' : ++$value; 
	      if(in_array($string[$key],$upper)){
	         $string[$key] = strtoupper($string[$key]); 
	      }
	    } else {
	      $string[$key] = $value; 
	    }
	  }
	  return join("",$string); 
	         
	}
	echo LetterChanges();
?>