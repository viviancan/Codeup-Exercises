<?php 

require_once "Log.php";

$log = new Log();

$log->_construct();

$log->info("This is an info message");

$log->error("This is an error message");

$log-> _destruct();





 ?>