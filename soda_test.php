<?php 

require_once "CanOfSoda.php";

$can = new CanOfSoda();

$can->brandName = "Coca Cola";
$can->expirationDate = "August 5,2017";
var_dump($can);

$can->openSoda();
$can->pourOut();
var_dump($can);

 ?>