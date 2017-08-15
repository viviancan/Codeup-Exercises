<?php 

require_once "Rectangle.php";

class Square extends Rectangle
{


	public function perimeter(){
		$perimeter = (2 * $this->width) + (2 * $this->height);
		echo "Perimeter is " . $perimeter . PHP_EOL;
		return $perimeter;
	}




}





 ?>