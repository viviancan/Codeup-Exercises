<?php 



function toCapital($string){

	return ucfirst($string);
}


echo toCapital("dog") . PHP_EOL;



function greeting($firstName, $lastName){

	if(!is_string($firstName) || !is_string($lastName)){
		echo "Sorry, two valid names were not given."; 
	} else {
		return "Hello, " . $firstName . " " . $lastName . "!";
	}
}

echo greeting("Vivian", "Canales");






 ?>