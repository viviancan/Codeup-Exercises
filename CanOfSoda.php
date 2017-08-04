<?php 



class CanOfSoda
{


	public $brandName;

	public $isFull = true;

	public $isOpen = false;

	public $expirationDate;

	public function openSoda()
	{

		$this->isOpen = true;
		echo "Soda opened!";


	}

	public function pourOut()
	{

		$this->isFull = false;
		echo "Soda pored out";

	}




}














 ?>