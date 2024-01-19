<?php require_once('header.php') ?>

<?php

$package_id =  $_GET['package_id'];

require_once('db.php');

$result = $mysqli->query("SELECT * FROM packages WHERE id = $package_id");

while ($row = mysqli_fetch_array($result)) {
  $title = $row['title'];
  $rate = $row['rate'];
  $description = $row['description'];
  $image = $row['image'];
}
?>


<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <h6>Edit Package</h6>
      </div>
      <div class="col-md-12 mt-4">
        <form action="update-package.php?package_id=<?php echo $package_id ?>" method="post" action="" enctype="multipart/form-data">

          <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value=" <?php echo $title ?> ">
          </div>
          <div class="form-row">
            <label> Per Person Rate</label>
            <input class="form-control" type="text" name="rate" value=" <?php echo $rate ?> ">
          </div>

          <div class="form-row">
            <label>Image</label>
            <input class="form-control" type="file" name="image">

            <img src="<?php $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"]) ?>  <?php echo $image ?>" width="200px">

          </div>

          <div class="form-row">
            <!-- <label>Description</label> -->
            <p></p>
            <span><?php echo $image ?></span>
            <textarea name="description" class="form-control" cols="30" rows="10">
              <?php echo $description ?>
            </textarea>
          </div>
          <div class="form-row mt-4">
            <input type="hidden" name="picc" value="<?php echo $image ?>">
            <input class="btn btn-success" type="submit" name="submit" value="Update">
          </div>
        </form>
      </div>

    </div>
  </div>

  <?php include('footer.php') ?>