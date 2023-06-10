<?php

  require_once('db.php');

  // print_r($_POST);

  if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $hotel_id = $_POST['hotel_id'];
     $price = $_POST['price'];

     $request = "insert into rooms(name,hotel_id,price) values ('$name','$hotel_id','$price')";

     mysqli_query($mysqli, $request);

     header('location:hotels.php');
  }else{
    echo 'something went wrong. try again.';
  }

  ?>