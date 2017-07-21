<?php

	$books = array(
		'The Hobbit' => array(
			'published' => 1937,
			'author' => 'J. R. R. Tolkien',
			'pages' => 310
		),
		'Game of Thrones' => array(
			'published' => 1996,
			'author' => 'George R. R. Martin',
			'pages' => 835
		),
		'The Catcher in the Rye' => array(
			'published' => 1951,
			'author' => 'J. D. Salinger',
			'pages' => 220
		),
		'A Tale of Two Cities' => array(
			'published' => 1859,
			'author' => 'Charles Dickens',
			'pages' => 544
		)
	);



/*Construct a loop that iterates through each book and then each book's keys and 
values. Have it output the book's title, then list the key value pairs for the data 
about each book.*/

// var_dump( $books);

// foreach($books as $key => $book){
// 	echo "Title: $key\n";

// 	foreach ($book as $key => $details){
// 		echo "$key: $details\n";
// 	}
// echo PHP_EOL;
// }


// foreach($books as $title => $book){
// 	if($book['published']>1950){
// 		echo "Title: $title\n";	

// 		foreach ($book as $key => $details){
// 			echo "$key: $details\n";
// 		}
// 	echo "===========================" . PHP_EOL;

// 	}

// }






/*
BONUSES:
1) Update loop to only include books with less than 300 pages
2) Create a new loop that outputs the average page length and year of publication of the books in the books array 
3) Add the following entry to the $books array:
    'Lord of the Rings' => array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    )
Construct another loop that iterates through each book as in the exercise step 2 
but the loop should only list the first book of a given author in the books array.
*/

//Bonus 1 - Update loop to only include books with less than 300 pages
// foreach($books as $title => $book){
// 	if($book['pages'] < 300){
// 		echo "Title: $title\n";	

// 		foreach ($book as $key => $details){
// 			echo "$key: $details\n";
// 		}
// 	echo "===========================" . PHP_EOL;

// 	}
// }

//Bonus 2- Create a new loop that outputs the average page length and year of publication of the books in the books array 

$pageAverage = 0; 
$pubYear = 0; 

foreach ($books as $title => $book) {
	$pageAverage += $book['pages'] ;
	$pubYear += $book['published'];

}
	 echo "Page Average: " . $pageAverage/4 . PHP_EOL;
	 echo "Publication Year Average: " . round($pubYear/4) . PHP_EOL;






?>