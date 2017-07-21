<?php

//negative numbers should first be converted to positive numbers
//no caluculation should be performed for non-numberic elements
//odd numbers will be added to the result
//even numbers will be multiplied to the result

	$result = 0 ;

	$testArray = [2, 1, -1, "bob"];

	foreach ($testArray as $testObject) {
		if(is_numeric($testObject)){
			if($testObject < 0){
				$testObject = -$testObject;
			}
			if ($testObject % 2 == 0){
				 $result += $testObject;
			} else {
				 $result *= $testObject;
			}	
		}	
	}
	echo $result . PHP_EOL; 



?>