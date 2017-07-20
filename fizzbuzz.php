<?php  

	/* Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.*/

	for ($i = 1; $i <= 100; $i++){

		// echo $i . PHP_EOL;

		if($i % 3 == 0 && $i % 5 ==0){
			echo "FizzBuzz";

		} else if($i % 5 == 0){
			echo "Buzz";

		} else if($i % 3 == 0){
			echo "Fizz";

		} else{
			echo $i ;
		}
		echo  PHP_EOL;
	}



?>