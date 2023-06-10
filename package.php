<?php 
    $firstname = null;
    $lastname =  null;

    session_start();
    if(isset( $_SESSION['user_login'])){
        $user = $_SESSION['user_login'];
        $firstname = $user['firstname'];
        $lastname = $user['lastname'];
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>
<!-- swiper css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> 
<!--font awesome cdn link -->
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<!-- css file -->
<link rel="stylesheet" href="style.css">



</head>
<body>

<!-- header -->

<section class="header">
    <a href="home.php" class="logo">Take a Trip</a>
    <nav class="navbar">
    <?php
            if(null!=($firstname && $lastname)){
                echo '



                <a href="home.php">Home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <a href="book.php">book</a>
                <a href="hotelbooking.php">hotel booking</a> 
                <a href="">'.$firstname.'</a>
                <a href="">'.$lastname.'</a>
                <a href="logout.php">Logout</a>

                
                ';
            }
            else{
                echo '
                <a href="home.php">Home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <!-- <a href="book.php">book</a> -->
                <!-- <a href="hotelbooking.php">hotel booking</a> -->
                <a href="login.php">admin login</a>
                <a href="user_login.php">login</a>
                <!-- <a href="registration.php">registration</a> -->
                ';
            }
         ?>
    </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->



<div class="heading" style="background: url(images/katka.jpg) no-repeat;">
<h1>Packages</h1>
</div>

<!-- package section starts -->
<section class="packages">
    <h1 class="heading-title">top destinations</h1>
    <div class="box-container">

    <?php 
    require_once('admin/db.php');

    if ($result = $mysqli->query("SELECT * FROM packages")) {
      // echo "Returned rows are: " . $result -> num_rows;
      // Free result set
      // echo $result->free_result();
    }
    ?>
    <?php foreach($result as $item) { ?>
        <div class="box">
            <div class="image">
            <img src="admin/<?php $_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]) ?><?php echo $item['image'] ?>" alt="">
            </div>
        <div class="content">
            <h3><?php echo $item['title'] ?></h3>
            <p><?php echo $item['description'] ?></p>
            <a href="book.php" class="btn">book now</a>
        </div>
        </div>
    <?php } ?>
    </div>

    <!-- <div class="load-more"><span class="btn">load more</span></div> -->
</section>
<!-- package section ends -->



<!--footer section starts-->
<section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +8801955712274</a>
                <a href="#"><i class="fas fa-phone"></i> +8801683921494</a>
                <a href="#"><i class="fas fa-envelope"></i> takeatripbd@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> House-22, Road-4, Banani, Dhaka, Bangladesh-1213</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>
  </section>
<!-- footer section ends -->


















<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js link -->
<script src="script.js"></script>


</body>
</html>