<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "registerdb_041";


$conn = mysqli_connect($server, $user,$pass,$db);

if($conn-> connect_error){
  die("connection failed");
}


?>