<?php

require_once('db.php');

if ($result = $mysqli->query("SELECT * FROM packages")) {
  // echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  // echo $result->free_result();
}


?>

<?php require('header.php') ?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <h6>Packages</h6>
      </div>
      <div class="col-md-6">
        <a href="add-package.php" class="btn btn-success" style="float:right">Add</a>
      </div>
      <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>per person rate</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach($result as $item) {?>
                <tr>
                  <td> <?php echo $item['id'] ?> </td>
                  <td> <?php echo $item['title'] ?> </td>
                  
                  <td> <img src="<?php $_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]) ?>  <?php echo $item['image'] ?>" width="200px"> </td>
                  <td> <?php echo $item['rate'] ?> </td>
                  <td>
                    <a href="edit-package.php?package_id=<?php echo $item['id'] ?>" class="btn btn-primary"> Edit </a>
                    <a href="delete-package.php?package_id=<?php echo $item['id'] ?>" class="btn btn-danger"> Delete </a>
                  </td>
                </tr>
                <?php }?>

            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>

<script>
  $('#show_rooms').on('click', function(){
    id = $(this).data('id');

    $.ajax({
        url: "get-rooms.php?hotel_id="+id,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            htmls = ``;
            res.forEach(element => {
              html = `<tr>
                          <td> `+element.name+` </td> 
                          <td> `+element.price+` </td> 
                       </tr>`;
              htmls += html;
            });

            $('.tbody').html(htmls);

            $('#rooms').modal('show');
        }
    });

  });
</script>

<!-- The Modal -->
<div class="modal" id="rooms">
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