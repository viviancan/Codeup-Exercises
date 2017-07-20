<?php
	//Prompt user for a starting number and ending number, 

	fwrite(STDOUT, 'What\'s the starting number?');
	$startingNumber = trim(fgets(STDIN));
	if(!is_numeric($startingNumber)){
		echo 'You must enter a number!' . PHP_EOL;
		exit;
	}

	fwrite(STDOUT, 'What\'s the ending number?');
	$endingNumber = trim(fgets(STDIN));
	if(!is_numeric($endingNumber)){
		echo 'You must enter a number!' . PHP_EOL;
		exit;
	}

	fwrite(STDOUT, 'Choose an increment.');
	$increment = trim(fgets(STDIN));
	if(!is_numeric($increment)){
		echo 'You must enter a number!' . PHP_EOL;
		exit;
	}

	//Default increment to 1 if no input.
	if($increment == " "){
		$increment = 1;
	}

	//Refactor to allow user to choose increment. (count by 1, 2, 10, ...)
	for ($i = $startingNumber; $i <= $endingNumber; $i+= $increment ){

		echo $i . PHP_EOL;
	}

?>