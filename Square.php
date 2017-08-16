<?php 

require_once "Rectangle.php";

class Square extends Rectangle
{


	public function __construct($height)
	{
		// $this->height = $height;
		// $this->width = $height; 

		$width = $height;
		parent::__construct($height, $width);
	}

	public function perimeter()
	{
		return $this->getHeight() * 4;
	}




}






 ?>