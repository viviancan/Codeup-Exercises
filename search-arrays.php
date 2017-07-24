<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.


	function ifValueExists($needle, $haystack)
	{
		if(array_search($needle, $haystack) === false){
			return false; 		
		} else {

			return true; 		
		}
	}


	if(ifValueExists('Tina', $names)){
		echo "Tina is in the array" . PHP_EOL;
	}else {
		echo "Tina is not in the array." . PHP_EOL;
	}

	if(ifValueExists('BOB', $names)){
		echo "BOB is in the array" . PHP_EOL;
	}else {
		echo "BOB is not in the array." . PHP_EOL;
	}




// //Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().


function numberOfValuesInCommon($array1, $array2)
{
	$count = 0;

	foreach($array1 as $value){
		if(ifValueExists($value,$array2)){
			$count++ ;
		}	
	}

	return $count; 

}


echo numberOfValuesInCommon($names, $compare) . PHP_EOL; 







	// function ifValueExists($needle, $haystack, $compare)
	// {

	// 	if(array_search($needle, $haystack) === false && array_search($needle, $compare === false)){
	// 		return "false"; 		
	// 	} 

	// 	if(array_search($needle, $haystack) === true && array_search($needle, $compare === true)){
	// 		return "true";
	// 	}
	// }

	// echo ifValueExists('Tina', $names, $compare) . PHP_EOL;

