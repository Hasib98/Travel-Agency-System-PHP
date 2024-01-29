<?php
require_once 'session.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">



</head>

<body>

    <!-- header -->

    <section class="header">
        <a href="home.php" class="logo">Take a Trip</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <!-- <a href="book.php">book</a> -->
            <!-- <a href="hotelbooking.php">hotel booking</a> -->
            <a href="login.php">admin login</a>
            <a href="user_login.php">login</a>
            <!-- <a href="registration.php">registration</a> -->
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->



    <!-- home section starts -->

    <section class="home">
        <div class="swiper home-slider ">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url('images/36.jpeg') no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around Bangladesh</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>


                <div class="swiper-slide slide" style="background:url('images/31.jpg') no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover Bangladesh's Culture</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>


                <div class="swiper-slide slide" style="background:url('images/13.jpg') no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel with safety and affordtably/h3>
                            <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!-- home section ends -->



    <!--service section starts-->

    <section class="services">
        <h1 class="heading-title">Our services</h1>
        <div class="box-container">
            <div class="box">
                <!-- <img src="" alt=""> -->
                <a href="tour_guide.php">
                    <h3>Tour Guide</h3>
                </a>

            </div>

            <div class="box">
                <!-- <img src="" alt=""> -->
                <a href="tracking.php">
                    <h3>Trekking</h3>
                </a>

            </div>

            <div class="box">
                <!-- <img src="" alt=""> -->
                <a href="affordable_tour.php">
                    <h3>Affordable Tours</h3>
                </a>

            </div>

            <div class="box">
                <!-- <img src="" alt=""> -->
                <a href="hotel_booking.php">
                    <h3>Hotel Booking</h3>
                </a>

            </div>

            <div class="box">
                <!-- <img src="" alt=""> -->
                <a href="adventure.php">
                    <h3>Adventure</h3>
                </a>

            </div>

            <div class="box">
                <!-- <img src="" alt=""> -->
                <a href="camping.php">
                    <h3>Camping</h3>
                </a>

            </div>
        </div>
    </section>
    <!--service section ends-->




    <!-- home about section start -->
    <section class="home-about">
        <div class="image">
            <img src="images/33.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Take A Trip is a trusted and reliable travel and tour company that is dedicated to providing exceptional customer service and customized travel packages that meet the unique needs and preferences of every client. If you're planning a trip to Bangladesh, Take A Trip is definitely worth considering.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends -->

    <?php
    require_once('admin/db.php');

    if ($result = $mysqli->query("SELECT * FROM packages")) {
        // echo "Returned rows are: " . $result -> num_rows;
        // Free result set
        // echo $result->free_result();
    }
    ?>


    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <?php foreach ($result as $item) { ?>
                <div class="box">
                    <div class="image">
                        <img src="admin/<?php $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"]) ?><?php echo $item['image'] ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $item['title'] ?></h3>
                        <!-- <p> <?php //echo $item['description'] ?></p> -->
                        <?php
                        // Check if the anchor link was clicked
                        if (isset($_GET['clicked'])) {
                            echo '<p>';
                            echo $item['description'];
                            echo '</p>';
                        } else {
                            // Display the anchor link
                            echo '<p>';
                            echo substr_replace($item['description'], "...", 20);
                            echo '<a href="?clicked=true">Read More</a>';
                            echo '</p>';
                        }
                        ?>
                        <a href="book.php" class="btn">Book Now</a>
                    </div>
                </div>

            <?php } ?>


        </div>
        <!-- <div class="load-more">
        <a href="package.php" class="btn">load more</a>
    </div> -->
    </section>
    <!-- home package section ends -->



    <!-- home offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>For loyal customers Only.</p>
            <p>For our regular clients who went 3 or more tours with us will get discounts upto 50%.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends -->



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
                <a href="#"><i class="fas fa-map"></i>House-22, Road-4, Banani, Dhaka, Bangladesh-1213</a>
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


    <!--footer section ends-->
















    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js link -->
    <script src="script.js"></script>
</body>

</html>