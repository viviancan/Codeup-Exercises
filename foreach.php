<?php

	//integer, float, boolean, array, null, or string.

	// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	// foreach ($things as $thingType){
	// 	if(is_int($thingType)){
	// 		echo "{$thingType} is an integer" . PHP_EOL ;

	// 	} else if (is_float($thingType)) {
	// 		echo "{$thingType} is a float" . PHP_EOL;

	// 	} else if (is_bool($thingType)) {
	// 		echo "{$thingType} is a boolean" . PHP_EOL;

	// 	} else if (is_array($thingType)) {
	// 		print_r($thingType) . "is an array" . PHP_EOL;

	// 	} else if (is_null($thingType)) {
	// 		echo "{$thingType} is null" . PHP_EOL;

	// 	} else{
	// 		echo "{$thingType} is a string" . PHP_EOL;
	// 	}

	// }




	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach ($things as $thingType){
		if(is_scalar($thingType)){
			echo "{$thingType} is a scalar" . PHP_EOL ;
		}
	}



