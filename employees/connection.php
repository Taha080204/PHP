<?php
$server = "localhost";
$username = "root";
$db_pass ="";
$db_name ="office";

$connection = mysqli_connect($server, $username, $db_pass,
$db_name);

if (!$connection){
    die("Failed to connect");
}else{
  echo "<h3>Connected</h3>";  
}

?>