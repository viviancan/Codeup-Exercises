<?php 


// Remember, the area of a rectangle is calculated by multiplying the width by the height


class Rectangle 
{

	public $height;

	public $width;

	public function __construct($height, $width) {

		$this->height = $height;
		$this->width = $width; 
	
	}

	public function area() {
		$area = ($this->height * $this->width);
		echo "The area is " . $area . PHP_EOL;
		return $area; 

	}


}