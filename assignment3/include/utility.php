<?php


$server = "localhost";
$username = "root";
$password = "";

//create connection for create db
$conn = new mysqli($server, $username,$password);
//check connection
if($conn->connect_error){
  die("connection failed");
}

$sql = "CREATE DATABASE IF NOT EXISTS registerdb_041";
if($conn->query($sql) == true){
  $alter = "<script>";
  $alter .= "console.log(\"database created\");";
  $alter .= "</script>";
  echo $alter . " <br>";
}else{
  $alter = "<script>";
  $alter .= "console.log(\"somthing went wrong database created\"+$conn->error);";
  $alter .= "</script>";
  echo $alter . " <br>";
}

$conn->close();

//create connection for create table 
$conn = new mysqli($server, $username,$password,"registerdb_041");
if($conn->connect_error){
  die("connection failed create table");
}

$sql = "CREATE TABLE IF NOT EXISTS registertbl_041(
  full_name VARCHAR(50) NOT NULL,
  contact_no VARCHAR(20),
  nic VARCHAR(15) NOT NULL PRIMARY KEY,
  course VARCHAR(10) ,
  email VARCHAR(10) NOT NULL

)";

if($conn->query($sql) == true){
  $alter = "<script>";
  $alter .= "console.log(\"table created\");";
  $alter .= "</script>";
  echo $alter . " <br>";
}else{
  $alter = "<script>";
  $alter .= "console.log(\"somthing went wrong table created\"+$conn->error);";
  $alter .= "</script>";
  echo $alter . " <br>";
}



//insert data
$sql = "INSERT INTO registertbl_041(full_name,contact_no,nic,course,email)  
VALUES('Gihan Bandara','071-1212121','99887765V','BIT','gihan123@gmail.com');";
$sql .= "INSERT INTO registertbl_041(full_name,contact_no,nic,course,email) 
VALUES('Shenal Gamage','077-5566443','97854512V','BIT','sheng@gmail.com');";
$sql .= "INSERT INTO registertbl_041 (full_name,contact_no,nic,course,email) 
VALUES('Sandani Fernado','075-5656565','97777888V','CIMA','sandu143@gmail.com');";
$sql .= "INSERT INTO registertbl_041 (full_name,contact_no,nic,course,email)  
VALUES('Akash Yapa','076-6666777','91111111V','BCS','ash91@yahoo.com ');";
$sql .= "INSERT INTO registertbl_041  (full_name,contact_no,nic,course,email)  
VALUES('Madhu Silva ','070-5252525','92445566V','AAT','silvaz@gmail.com ')";

try{
  if($conn->multi_query($sql) == true){
  $alter = "<script>";
  $alter .= "console.log(\"data inserted\");";
  $alter .= "</script>";
  echo $alter . " <br>";
}else{
  $alter = "<script>";
  $alter .= "console.log(\"somthing went wrong table data inserted\"+$conn->error);";
  $alter .= "</script>";
  echo $alter . " <br>";
}
}catch(exception $e){
   echo $e->getMessage();
}

$conn->close();

?>