<?php

// TODO: Create your inspect() function here

function inspect($input)
{
	$message = "The " . gettype($input) .  " is " ;

	if(empty($input) && is_array($input)){
		return $message . "an empty array" . PHP_EOL;

	} elseif(empty($input) && is_string($input)){
		return $message . "empty" . PHP_EOL;

	} elseif(is_numeric($input)){
		return $message . $input . PHP_EOL;
	
	} elseif(is_null($input)){
		return "The value is NULL." . PHP_EOL;
	
	} elseif(is_bool($input) && $input === false){
		return $message . "false" . PHP_EOL;

	} elseif(is_bool($input) && $input === true){
		return $message . "true" .PHP_EOL;

	} elseif(is_string($input)){
		return $message . $input . PHP_EOL;

	} elseif(is_array($input)){
		return $message . "an array" . PHP_EOL;
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

$break = "---------------------" . PHP_EOL;

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1);
echo $break;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2);
echo $break;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3);
echo $break;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4);
echo $break;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null);
echo $break;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1);
echo $break;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2);
echo $break;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1);
echo $break;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2);
echo $break;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1);
echo $break;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2);
echo $break;





