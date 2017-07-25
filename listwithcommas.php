<?php  

// //(1) Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.

// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $phyArray = array( );

// $phyArray = explode(',' , $physicistsString);
// array_pop($phyArray);
// array_push($phyArray, "and Tony Stark");
// $physicistsString = implode(", " , $phyArray);

// echo "Some of the most famous fictional theoretical physicists are {$physicistsString}.";


//(2) Turn your solution into a function named humanizedList(). You should be able to pass the $physicistsArray as the only parameter, and your function will return the result.

// $phyArray = array( );
// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// //turn string into array
// $phyArray = explode(',' , $physicistsString);

// function humanizedList($array)
// {
// 	array_pop($array);
// 	array_push($array, "and Tony Stark");
// 	//changes array back to string
// 	$physicistsString = implode(", " , $array);
// 	return $physicistsString;
// }

// $famousFakePhysicists = humanizedList($phyArray);

// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;


//(3)Update your code to list the physicists by first name, in alphabetical order.


// $phyArray = array( );
// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// //turn string into array
// $phyArray = explode(',' , $physicistsString);


// function humanizedList($array)
// {
// 	//alpha order
// 	sort($array);
// 	foreach ($array as $key => $value) {
// 		$array[$key] = $value;
// 	}

// 	//pops of last item
// 	$lastItem = array_pop($array);
// 	array_push($array, "and " . $lastItem);

// 	//changes array back to string
// 	$physicistsString = implode(", " , $array);
// 	return $physicistsString;
// }

// $famousFakePhysicists = humanizedList($phyArray);

// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;



//(4) Create a second parameter to make alphabetical sorting optional.

$phyArray = array( );
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//turn string into array
$phyArray = explode(',' , $physicistsString);


function humanizedList($array , $sort = false)
{
	if($sort){
		sort($array);
	}

	$lastItem = array_pop($array);
	array_push($array, "and " . $lastItem);

	//changes array back to string
	$physicistsString = implode(", " , $array);
	return $physicistsString;

}

$famousFakePhysicists = humanizedList($phyArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;










?>