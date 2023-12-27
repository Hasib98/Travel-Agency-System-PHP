<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'user_form';


 $mysqli = new mysqli($host,$username,$password,$database);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
















?>