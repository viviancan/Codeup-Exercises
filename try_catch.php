<?php 

function sayBob($bob = "", $ross)
{
	if ($bob === "") {
		throw new InvalidArgumentException("Input cannot be empty.", 45);

	} else if (!is_string($bob)) {
		// throw new Exception("Input must be a string!");
		throw new InvalidArgumentException("sayBob expects a string. Input was: " . $bob .
			' -not a string');

	} else if (!ctype_alpha($bob)) {

		// throw new Exception("Must use only letters.");
		throw new InvalidArgumentException("sayBob expects letters. Input was: " . $bob .
			' -not letters');

	} else if (strtolower($bob) !== "bob") {
		throw new Exception("Name must match Bob");

	} else {
		strtolower($bob);
		echo ucfirst($bob);
	}
	
}

/*
	Use the code above to do the following:

		1) Create a try/catch block and call the sayBob() function in the try block
		2) Create the catch block to output both the getMessage() and the file name
		3) Try out the test inputs listed below in try/catch block
		4) Read PHP docs on invalidArgumentException
		5) Change appropriate throws that fall under invalidArgumentException in sayBob() conditions and add new catch block for it before Exception
		6) Read PHP docs on ArgumentCountError and incorporate it in another catch block
		7) Try out test messages listed below again
	
	Test inputs...

		sayBob("Bob");
			>>Error Message: too few arguments
		sayBob(12345, "Ross");
			>>Error Message: Input must be a string
		sayBob("Bob123", "Ross");
			>>Error Message: Must only use letters
		sayBob("Bubba", "Ross");
			>>Error Message: Name must match bob
		sayBob("Bob", "Ross");
			>>Bob
*/


// The echoes before the try/catch are to help you better see output
echo PHP_EOL;
echo "==========================" . PHP_EOL;
echo "See below for the results!" . PHP_EOL;
echo "==========================" . PHP_EOL;
echo PHP_EOL;


// Write the try/catch block here



try{
	 sayBob("bob");

} catch(InvalidArgumentException $e) {
	echo "Error message: " . $e->getMessage(). " in " . $e->getFile() . PHP_EOL;

} catch (ArgumentCountError $e){
	echo "Error message: " . $e->getMessage() . PHP_EOL;

}  catch (Exception $e){
	echo "Error message: " . $e->getMessage() . PHP_EOL;
}






// The echoes after the try/catch are to help you test that Exceptions were properly caught and code continued execution
echo PHP_EOL;
echo "==========================" . PHP_EOL;
echo "This code should always run!" . PHP_EOL;
echo "==========================" . PHP_EOL;
echo PHP_EOL;
