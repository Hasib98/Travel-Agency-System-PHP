<?php

require_once('db.php');

if ($result = $mysqli->query("SELECT * FROM bookings")) {
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
        <h6>Bookings</h6>
      </div>
      <!-- <div class="col-md-6">
        <a href="add-hotel.php" class="btn btn-success" style="float:right">Add</a>
      </div> -->
      <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
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