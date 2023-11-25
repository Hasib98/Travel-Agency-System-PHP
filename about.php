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
    <title>about</title>
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
                <a href="booking_history.php">'.$firstname.'</a>
                <a href="booking_history.php">'.$lastname.'</a>
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

<div class="heading" style="background: url(images/about.jpg)no-repeat;">
    <h1>about us</h1>
</div>



<!-- about section starts -->
<section class="about">
    <div class="image">
        
        <img src="images/about-1.png" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Take A Trip is a reputable and reliable travel and tour company that provides a wide range of services to clients who want to explore the beauty and diversity of Bangladesh. The company is dedicated to offering high-quality and customized travel packages that cater to the unique needs and preferences of every client.
        One of the key features of Take A Trip is its team of experienced and knowledgeable travel experts who are passionate about providing exceptional customer service. They work closely with clients to understand their travel needs and budget, and create customized itineraries that are both enjoyable and affordable.
        Take A Trip offers a variety of travel packages that cater to different interests, including cultural tours, adventure tours, wildlife tours, and more. The company's cultural tours are particularly popular, as they offer clients the opportunity to experience Bangladesh's rich cultural heritage, from the vibrant festivals and colorful markets to the historic landmarks and ancient temples.
        </p>

        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7service</span>
            </div>
        </div>
    </div>
</section>
<!-- about section ends -->



<!-- review section start -->
<section class="reviews">
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slider slide">
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Simin Sadia</h3>
                <span>traveler</span>
                <p>"I had an amazing experience traveling with Take A Trip. Their team was very professional and accommodating to all of our needs. The itinerary was well-planned and included some of the most beautiful destinations in Bangladesh. I would highly recommend this travel company to anyone looking to explore this wonderful country."</p>
                
            </div>

            <div class="swiper-slider slide">
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                
                </div>
                <h3>Lopa Mazumder</h3>
                <span>traveler</span>
                <p>"I recently went on a day trip to Sonargaon with Take A Trip, and it was one of the best experiences of my life. The tour guide was friendly and knowledgeable, and the itinerary was well-planned. The company provided us with an affordable and enjoyable trip, and I would highly recommend them to anyone."
</p>
               
            </div>

            <div class="swiper-slider slide">
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Sadia Afrin</h3>
                <span>traveler</span>
                <p>"I had a great time on a group tour of Srimangal organized by Take A Trip. The tour was well-organized, and we had a wonderful time exploring the tea gardens, Lawachara National Park, and other destinations in the area. The accommodations were comfortable, and the meals were delicious. I would definitely travel with this company again."</p>
                
            </div>

            <div class="swiper-slider slide">
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Tanzina Tarin</h3>
                <span>traveler</span>
                <p>"Take A Trip provided us with a well-organized and enjoyable tour of Cox's Bazar. The beaches were breathtaking, and the accommodations were excellent. The tour guides were knowledgeable and informative, and we felt safe and well-taken care of throughout the trip. I would highly recommend this company to anyone looking to explore Cox's Bazar."</p>
               
            </div>

            <div class="swiper-slider slide">
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Hafsa Arohi</h3>
                <span>traveler</span>
                <p>"Take A Trip provided us with an excellent tour of the Sundarbans. The guides were very knowledgeable and informative, and the accommodations were top-notch. The trip was well-organized, and we felt safe and well-taken care of throughout the journey but I would like them to decrease the price a little bit or maybe they can give a discount to the students."</p>
               
            </div>

            <div class="swiper-slider slide">
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Maruf Ahamed</h3>
                <span>traveler</span>
                <p>"I recently went on a tour of Rangamati Hill District with Take A Trip, and it was an incredible experience. The natural beauty of the area was breathtaking, and the accommodations were comfortable and clean. The tour guide was knowledgeable and friendly, and the itinerary was well-planned. I would highly recommend Take A Trip to anyone looking to explore this part of Bangladesh."</p>
                
            </div>

        </div>
    </div>
</section>
<!-- review section ends -->




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



















<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js link -->
<script src="script.js"></script>


</body>
</html>