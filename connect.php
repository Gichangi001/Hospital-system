<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$database_name = "data1";

$con = mysqli_connect($serverName, $userName, $password, $database_name);

if(mysqli_connect_errno()){
      echo "Failed to connect!";
	  exit();
}
echo "Connection successful!<br><br><br>";


?>