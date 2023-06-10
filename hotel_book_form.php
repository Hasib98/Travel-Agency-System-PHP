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
     $hotel_id = $_POST['hotel_id'];
     $room_id = $_POST['room_id'];

     $request = "insert into hotel_bookings(hotel_id,room_id,name,email,phone,address,location,arrivals,guests,leaving) values ('$hotel_id','$room_id','$name','$email','$phone','$address','$location','$arrivals','$guests','$leaving')";

     mysqli_query($mysqli, $request);

     sleep(3);

     header('location:book.php');
  }else{
    echo 'something went wrong. try again.';
  }

  ?>