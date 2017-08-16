<?php 


require_once __DIR__ . "/Model.php";
require_once __DIR__ . "/User.php";


// $data = new Model();
// $data->name = 'Arthur Dent'
// $data->group = 'Codeup';
// $data->age = 42

// var_dump($data);

// $user = new User();
// $user->username = "bobbytables";
// $user->password = "password123!";

echo "The table that stores users is " .
User::getTableName();



 ?>