<?php  

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$phyArray = array( );

//changes string to array
$phyArray = explode(", " , $physicistsString);

/*=======================================================================================*/
//(1) Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.

// $lastItem = array_pop($phyArray);
// array_push($phyArray, " and " . $lastItem);
// $physicistsString = implode("," , $phyArray);
// echo $physicistsString;

/*=======================================================================================*/
//(2) Turn your solution into a function named humanizedList(). You should be able to pass the $physicistsArray as the only parameter, and your function will return the result.

// function humanizedList($array)
// {
// 	$lastItem = array_pop($array);

// 	array_push($array, "and " . $lastItem);

// 	return implode(", " , $array);

// }

// $famousFakePhysicists = humanizedList($phyArray);

/*=======================================================================================*/
//(3)Update your code to list the physicists by first name, in alphabetical order.

// function humanizedList($array)
// {
// 	//alpha order
// 	sort($array);
	
// 	$lastItem = array_pop($array);

// 	array_push($array, "and " . $lastItem);

// 	return implode(", " , $array);

// }

// $famousFakePhysicists = humanizedList($phyArray);


/*=======================================================================================*/
//(4) Create a second parameter to make alphabetical sorting optional.

function humanizedList($array , $sort = false)
{
	if($sort){
		sort($array);
	}

	$lastItem = array_pop($array);
	array_push($array, "and " . $lastItem);

	return implode(", " , $array); 

}

$famousFakePhysicists = humanizedList($phyArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

/*=======================================================================================*/
//BONUS EXERCISE 1 Write a function to remove all the vowels from the following array 

// =$bonus = [‘a’, ‘b’, ‘c’, ‘d’, ‘e’, ‘f’, ‘g’, ‘h’, ‘i’]

// function removeVowels($test){

// }







/*BONUS EXERCISE 2
Write a function to put the following array in alphabetical order: 
[‘e’, ‘a’, ‘g’, ‘c’, ‘i’, ‘d’, ‘f’, ‘b’, ‘h’]
Do not use the built-in sort function….*/















?>