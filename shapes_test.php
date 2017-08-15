<?php 


require_once "Rectangle.php";

require_once "Square.php";

$shape1 = new Rectangle(7,10);

echo "The area of a rectangle with a height of " . $shape1->height . " and the width of " . $shape1->width . " is " . $shape1->area() . PHP_EOL;


$square1 = new Square(2,2);

echo "The area of a square with a height of " . $square1->height . " and the width of " . $square1->width . " is " . $square1->area() . PHP_EOL . " and the perimeter is " . $square1->perimeter() . PHP_EOL;
