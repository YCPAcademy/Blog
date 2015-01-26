<?php

	function blogdelimited ($string, $limiter){
		
		$string = explode(" ", $string);
		$string = array_slice($string, 0, $limiter);
		$string = implode(" ", $string);
		$string .=" ...";
		return $string;
	}
	
?>