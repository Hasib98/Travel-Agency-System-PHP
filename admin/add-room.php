<?php require_once('header.php') ?>
<?php
$hotel_id =  $_GET['hotel_id'];
?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <h6>Add Room</h6>
      </div>
      <div class="col-md-12 mt-4">
        <form action="submit-room.php" method="post">
          <input type="hidden" name="hotel_id" value="<?php echo $hotel_id ?>">
          <div class="form-row">
            <label>Name</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="num" name="price">
          </div>
          <div class="form-row mt-4">
            <input class="btn btn-success" type="submit" name="submit" value="Submit">
          </div>
        </form>
      </div>

  </div>
</div>

<?php include('footer.php') ?>