


<?php 
require_once('admin/header.php') ;
echo '<div class="content-wrapper">
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
              <th><b style="color:ffffff;">Action</b></th>
            </tr>
          </thead>
          <tbody>';

            foreach ($result as $item) { 
              echo '<tr>
                <td>' . $item["id"] .' </td>
                <td>' . $item["email"] .' </td>
                <td>' . $item["phone"] .' </td>
                <td>' .$item["address"] .' </td>
                <td>' .$item["location"] .' </td>
                <td>' . $item["guests"] .' </td>
                <td>' . $item["arrivals"] .' </td>
                <td>' . $item["leaving"] .' </td>
                <td>

                  <form method="post">
                  <input type="hidden" name="id_to_cancel" value=" '. $item["id"] . '">
                    <button type="submit" name="cancel_button" class="btn btn-danger">Cancel</button>
                  </form>

                </td>
              </tr>';
             } 

          echo '</tbody>
        </table>
      </div>
    </div>
  </div>
</div>'
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
              <th><b style="color:ffffff;">Action</b></th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($result as $item) { ?>
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
                <!-- <td> <button class="btn btn-danger">Cancel</button></td> -->
                <td>

                  <form method='post'>
                  <input type='hidden' name='id_to_cancel' value='<?php echo $item['id'] ?>'>
                    <button type='submit' name='cancel_button' class="btn btn-danger">Cancel</button>
                  </form>

                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
