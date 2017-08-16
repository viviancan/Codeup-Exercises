<?php 


class Log
{

	private $filename; 

	private $handle; 

	public function __construct($prefix = "log")
	{

		if(!is_string($prefix)){
			$prefix = "log";
		}

		$this->filename = $prefix . date("-Y-m-d") . ".log";

		$this->handle = fopen($this->filename, 'a');

	}

	public function __destruct()
	{
		fclose($this->handle);
	}

	protected function logMessage($logLevel, $message)
	{

		$logFormat = date("Y-m-d H:i:s") . "[" . $logLevel . "]" . $message . PHP_EOL; 

		fwrite($this->handle, $logFormat);

	}

	public function info($message)
	{

		$this->logMessage("INFO", $message);
	}


	public function error($message)
	{

		$this->logMessage("ERROR", $message);

	}



}




 ?>



