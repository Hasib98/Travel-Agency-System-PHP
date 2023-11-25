<?php

  require_once('admin/db.php');

  // print_r($_POST);

  if(isset($_POST['send'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $location = $_POST['location'];
     $guests = $_POST['guests'];
     $arrivals = $_POST['arrivals'];
     $leaving = $_POST['leaving'];

     $request = "insert into bookings(name,email,phone,address,location,arrivals,guests,leaving) values ('$name','$email','$phone','$address','$location','$arrivals','$guests','$leaving')";

     mysqli_query($mysqli, $request);

     sleep(3);


     header('location:booking_history.php');
  }else{
    echo 'something went wrong. try again.';
  }

  ?>