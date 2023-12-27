<?php require_once('header.php') ?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <h6>Add Package</h6>
      </div>
      <div class="col-md-12 mt-4">
        <form action="submit-package.php" method="post" action="" enctype="multipart/form-data">
          
          <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title">
          </div>
          <div class="form-row">
            <label>Per Person Rate</label>
            <input class="form-control" type="text" name="rate">
          </div>

          <div class="form-row">
            <label>Image</label>
            <input class="form-control" type="file" name="image">
          </div>

          <div class="form-row">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10">

            </textarea>
          </div>
          <div class="form-row mt-4">
            <input class="btn btn-success" type="submit" name="submit" value="Submit">
          </div>
        </form>
      </div>

  </div>
</div>

<?php include('footer.php') ?>