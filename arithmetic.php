<?php

	function add($a, $b)
	{
	    return $a + $b;
	}

	function subtract($a, $b)
	{
	    return $a - $b; 
	}

	function multiply($a, $b)
	{
		return $a * $b; 
	}

	function divide($a, $b)
	{
	    return $a / $b; 
	}

	function modulus($a, $b)
	{
		return $a % $b; 
	}

	echo add(2, 7) . PHP_EOL;

	echo subtract(10, 9) . PHP_EOL;

	echo multiply(1, 7) . PHP_EOL;

	echo divide(10, 2) . PHP_EOL;

	echo modulus(7, 2) . PHP_EOL;
