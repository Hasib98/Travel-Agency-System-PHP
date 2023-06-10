<?php

require_once('db.php');

if ($result = $mysqli->query("SELECT * FROM hotel_bookings")) {
  // echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  // echo $result->free_result();
}


?>

<?php require_once('header.php') ?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <h6>Hotel Bookings</h6>
      </div>
      <!-- <div class="col-md-6">
        <a href="add-hotel.php" class="btn btn-success" style="float:right">Add</a>
      </div> -->
      <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Hotel Name</th>
                <th>Room</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Guests</th>
                <th>Arrivals</th>
                <th>Leaving</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach($result as $item) {?>
                <tr>
                <td> <?php echo $item['id'] ?> </td>
                <td> 
                    <?php
                     $hotel_id = $item['hotel_id'];
                     $hotel = $mysqli->query("SELECT * FROM hotels WHERE id= $hotel_id"); 
                     
                     while($row = mysqli_fetch_array($hotel)){
                      $name = $row['name'];
                    }
                     
                    ?>
                    <?php echo $name ?> 
                  </td>
                  <td> 
                    <?php
                     $room_id = $item['room_id'];
                     $room = $mysqli->query("SELECT * FROM rooms WHERE id= $room_id"); 
                     
                     while($rows = mysqli_fetch_array($room)){
                      $room_name = $rows['name'];
                    }
                     
                    ?>
                    <?php echo $room_name ?> 
                  </td>
                  <td> <?php echo $item['name'] ?> </td>
                  <td> <?php echo $item['email'] ?> </td>
                  <td> <?php echo $item['phone'] ?> </td>
                  <td> <?php echo $item['address'] ?> </td>
                  <td> <?php echo $item['location'] ?> </td>
                  <td> <?php echo $item['guests'] ?> </td>
                  <td> <?php echo $item['arrivals'] ?> </td>
                  <td> <?php echo $item['leaving'] ?> </td>
                </tr>
                <?php }?>

            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Rooms</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>price</th>
            </tr>
          </thead>
          <tbody class="tbody">

          </tbody>
        </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>