<?php require_once('header.php') ?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <h6>Add Hotels</h6>
      </div>
      <div class="col-md-12 mt-4">
        <form action="submit-hotel.php" method="post">
          
          <div class="form-row">
            <label>Name</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-row mt-4">
            <input class="btn btn-success" type="submit" name="submit" value="Submit">
          </div>
        </form>
      </div>

  </div>
</div>

<?php include('footer.php') ?>