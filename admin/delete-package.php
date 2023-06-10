<?php

  require_once('db.php');

  $package_id =  $_GET['package_id'];

  $request = "DELETE FROM packages WHERE id=$package_id";

  mysqli_query($mysqli, $request);


  sleep(3);


  header('location:packages.php');

  ?>