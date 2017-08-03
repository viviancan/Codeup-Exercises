<?php 


class Log
{

	public $filename; 

	public function logMessage($logLevel, $message)
	{
		$this->filename = "log" . date("-Y-m-d") . ".log";

		$handle = fopen($this->filename, 'a');

		$logFormat = date("Y-m-d H:i:s") . "[" . $logLevel . "]" . $message . PHP_EOL; 

		fwrite($handle, $logFormat);

		fclose($handle);

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
