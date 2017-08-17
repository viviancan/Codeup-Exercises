<?php 


require_once "Rectangle.php";

require_once "Square.php";

$shape1 = new Rectangle(7,10);

// echo "The area of a rectangle with a height of " . $shape1->height . " and the width of " . $shape1->width . " is " . $shape1->area() . PHP_EOL;

echo $shape1->area();

$square1 = new Square(2);
echo $square1->area();
echo $square1->perimeter();

// echo "The area of a square with a height of " . $square1->height 
// . " and the width of " . $square1->width . " is " . $square1->area() . PHP_EOL . " and the perimeter is " . $square1->perimeter() . PHP_EOL;



// $rectangle1 = new Rectangle(1,2);

// echo $rectangle1->area();


