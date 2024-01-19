<?php

require_once('db.php');

$package_id =  $_GET['package_id'];

$title = $_POST['title'];
$description = $_POST['description'];
$rate = $_POST['rate'];
$image = $_POST['picc'];
$target_file = $image;


if (isset($_POST['submit'])) {


  if (isset($_FILES["image"]["name"])) {
    # code...
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    // echo $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      $rand = mt_rand(1, 100000000000000000);
      $uploadOk = 1;
    }

    // Check file size
    // if ($_FILES["image"]["size"] > 50000000) {
    //   echo "Sorry, your file is too large.";
    //   $uploadOk = 0;
    // }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  } else {
    # code...
    $target_file = null;
  }
} else {
  echo 'something went wrong. try again.';
}

echo '<script>alert("'.$target_file.'")</script>'; 
$request = "UPDATE packages SET title='$title',description='$description',rate='$rate',image='$target_file' WHERE id=$package_id";

mysqli_query($mysqli, $request);


sleep(1);


header('location:packages.php');
