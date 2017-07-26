<?php

function logMessage($logLevel, $message)
{
	$filename = "log" . date("-Y-m-d") . ".log";

	$handle = fopen($filename, 'a');

	$logFormat = date("Y-m-d H:i:s") . "[" . $logLevel . "]" . $message . PHP_EOL; 

	fwrite($handle, $logFormat);

	fclose($handle);
}

// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");



function logInfo($message)
{
	logMessage("INFO", $message);
}

logInfo("This is an info message");


function logError($message)
{
	logMessage("ERROR", $message);
}

logError("This is an info message");
