<?php

	function add($a, $b){
		if(is_numeric($a) && is_numeric($b)){
			return $a + $b;
		} else {
			return "Error" ; 
		}
	}

	function subtract($a, $b){
		if(is_numeric($a) && is_numeric($b)){
			return $a - $b;
		} else {
			return "Error" ; 
		}
	}

	function multiply($a, $b){
		if(is_numeric($a) && is_numeric($b)){
			if($b != 0){
				return $a * $b;	
			} else{
				return "Error";
			}

		} else {
			return "Error" ; 
		}
	}

	function divide($a, $b){
		if(is_numeric($a) && is_numeric($b)){
			return $a / $b;
		} else {
			return "Error" ; 
		} 
	}

	function modulus($a, $b){
		if(is_numeric($a) && is_numeric($b)){
		    return $a % $b;
		} else {
			return "Error" ; 
		}
	}

	echo add(2, "dog") . PHP_EOL;

	echo subtract(10, 9) . PHP_EOL;

	echo multiply(1, 7) . PHP_EOL;

	echo divide(10, 4) . PHP_EOL;

	echo modulus(7, 2) . PHP_EOL;
