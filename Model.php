<?php 


class Model 
{

	protected static $table = ""; 

	private $data = []; 

	public function __set($name, $value)
	{
		$this->data[$name] = $value; 
	}

	public function __get($name)
	{

		if(array_key_exists($name, $this->data)){

			return $this->data[$name];
		}
		return null;

	}

	public static function getTableName()
	{
		return static::$table; 

	}











}




 ?>