<?php

function run_query($query)
{
  require('db.php');
  if ($result = $mysqli->query($query)) {
    return $result;
  }
}
function page_load()
{
  require_once('header.php');
  $query = "SELECT * FROM bookings";
  $result = run_query($query);
  Table_of_package_list($result);
}
page_load();

function Table_of_package_list($result)
{

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
              <th>Staus</th>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Location</th>
              <th>Guests</th>
              <th>Arrivals</th>
              <th>Leaving</th>
              <th>Amount</th>
              <th>PaymentID</th>
              <th><b style="color:ffffff;">Action</b></th>
              <th><b style="color:ffffff;">Action</b></th>
            </tr>
          </thead>
          <tbody>';

  foreach ($result as $item) {
    if ($item["status"] == "Approved")
    {
      $table_data = '<td class = "h5 bg-success text-white">' . $item["status"] . ' </td>' ;
    }
    else if ($item["status"] == "pending")
    {
      $table_data = '<td class = "bg-secondary text-white">' . $item["status"] . ' </td>' ;
    }
    echo '<tr>';
    echo $table_data;
                 
               echo '<td>' . $item["id"] . ' </td>
                <td>' . $item["name"] . ' </td>
                <td>' . $item["email"] . ' </td>
                <td>' . $item["phone"] . ' </td>
                <td>' . $item["address"] . ' </td>
                <td>' . $item["location"] . ' </td>
                <td>' . $item["guests"] . ' </td>
                <td>' . $item["arrivals"] . ' </td>
                <td>' . $item["leaving"] . ' </td>
                <td>' . $item["amount"] . ' </td>
                <td>' . $item["pid"] . ' </td>
                <td>

                  <form method="post">
                  <input type="hidden" name="id_to_cancel" value=" ' . $item["id"] . '">
                    <button type="submit" name="cancel_button" class="btn btn-danger">Cancel</button>
                    
                  </form>

                </td>

                <td>

                  <form method="post">
                  <input type="hidden" name="id_to_cancel" value=" ' . $item["id"] . '">
                    <button type="submit" name="confirm_button" class="btn btn-success">Confirm</button>
                    
                  </form>

                </td>
              </tr>';
  }

  echo '</tbody>
        </table>
      </div>
    </div>
  </div>
</div>';
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"   && isset($_POST['cancel_button'])) {
  $idToCancel = $_POST['id_to_cancel'];
  $query_delete = "DELETE FROM bookings WHERE id = " . $idToCancel;
  //echo '<script>alert("Do you wan to delete data? ")</script>'; 
  echo $query_delete;
  require('db.php');
  if ($result = $mysqli->query($query_delete)) {
  }
  sleep(1);
  header('location: bookings.php');
  ob_end_flush();

  
} else if ($_SERVER["REQUEST_METHOD"] == "POST"   && isset($_POST['confirm_button'])) {
  $idToConfirm = $_POST['id_to_cancel'];

  $approved = "Approved";
  $query_insert = "update bookings  set status = '" . $approved . "' WHERE id = " . $idToConfirm;
  //echo $query_insert;
  require('db.php');
  mysqli_query($mysqli, $query_insert);


  sleep(1);
  header('location:bookings.php');
  ob_end_flush();
}







// $query_delete = "DELETE FROM bookings WHERE id = " . $idToCancel;
// //echo '<script>alert("Do you wan to delete data? ")</script>'; 
// echo $query_delete;
// require('db.php');
// if ($result = $mysqli->query($query_delete)) {
// }
// sleep(1);
// header('location: bookings.php');
// ob_end_flush();

?>

