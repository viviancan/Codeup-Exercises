<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.



// $result = array_search('Tina', $names);
// var_dump($result);


	function ifValueExists($needle, $haystack)
	{
		if(array_search($needle, $haystack) === false){
			return "false"; 		
		} else {

			return "true"; 		
		}
	}

echo ifValueExists('Bob', $names) . PHP_EOL;















