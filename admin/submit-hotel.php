<?php

  require_once('db.php');

  // print_r($_POST);

  if(isset($_POST['submit'])){
     $name = $_POST['name'];

     $request = "insert into hotels(name) values ('$name')";

     mysqli_query($mysqli, $request);

     header('location:hotels.php');
  }else{
    echo 'something went wrong. try again.';
  }

  ?>