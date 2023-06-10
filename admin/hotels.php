<?php

require_once('db.php');

if ($result = $mysqli->query("SELECT * FROM hotels")) {
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
        <h6>Hotels</h6>
      </div>
      <div class="col-md-6">
        <a href="add-hotel.php" class="btn btn-success" style="float:right">Add</a>
      </div>
      <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach($result as $item) {?>
                <tr>
                  <td> <?php echo $item['id'] ?> </td>
                  <td> <?php echo $item['name'] ?> </td>
                  <td>
                    <a href="add-room.php?hotel_id=<?php echo $item['id'] ?>" class="btn btn-primary"> Add Rooms </a>
                    <a href="#" id="show_rooms" data-id=" <?php echo $item['id'] ?> " class="btn btn-warning"> Show Rooms </a>
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