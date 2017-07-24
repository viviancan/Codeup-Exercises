<?php 

fwrite(STDOUT, "Enter the string?");
$string = trim(fgets(STDIN));

function toCapital($string){

	return ucfirst($string);
}

echo toCapital($string) . PHP_EOL;





fwrite(STDOUT, "What is your first name?");
$firstName = trim(fgets(STDIN));

fwrite(STDOUT, "What is your last name?");
$lastName = trim(fgets(STDIN));

function greeting($firstName, $lastName){

	if(!is_string($firstName) || !is_string($lastName)){
		echo "Sorry, two valid names were not given."; 
	} else {
		return "Hello, " . $firstName . " " . $lastName . "!";
	}
}

echo greeting($firstName, $lastName);






 ?>