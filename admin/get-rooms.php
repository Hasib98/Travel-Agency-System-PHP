<?php

require_once('db.php');

$hotel_id = $_GET['hotel_id'];

if ($result = $mysqli -> query("SELECT * FROM rooms where hotel_id = $hotel_id")) {
    
    
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
    
        $return_arr[] = array("id" => $id,
                        "name" => $name,
                        "price" => $price);
    }
    
    // Encoding array in JSON format
    echo json_encode($return_arr);
  }


?>