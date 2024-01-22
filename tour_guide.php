<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- swiper css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> 
<!--font awesome cdn link -->
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<!-- css file -->
<link rel="stylesheet" href="style.css">
    <title>Tour Guides</title>
    <style>
        .guide {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* display: inline-flex; */
            display: inline-block;
        }

        .guide img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        h1{
            font-size: 400%;
        }
        h3 , p{
            font-size: 200%;
        }
        p{
            font-size: 150%;
        }

       
    </style>
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

    <section>
        <h1>Meet Our Incredible Tour Guides</h1>

        <div class="guide">
            <img src="images/guide-5.jpg" alt="Alexandra">
            <h3>Alexandra "History Maven"</h3>
            <p><strong>Specialization:</strong> Historical and cultural tours</p>
            <p><strong>Bio:</strong> With a background in history and a passion for storytelling, Alexandra brings ancient sites to life with her engaging narratives. Whether you're exploring ancient ruins or strolling through historic neighborhoods, she ensures a journey through time that is both educational and entertaining.</p>
        </div>

        <div class="guide">
            <img src="images/guide-4.jpg" alt="Carlos">
            <h3>Carlos "Adventure Seeker"</h3>
            <p><strong>Specialization:</strong> Outdoor adventures and adrenaline-packed activities</p>
            <p><strong>Bio:</strong> For those seeking an adrenaline rush, Carlos is your go-to guide. From hiking challenging trails to exploring hidden caves, he combines a love for nature with a sense of adventure. Get ready for an exhilarating experience that will leave you with lasting memories.</p>
        </div>

        <div class="guide">
            <img src="images/guide-1.jpg" alt="Elena">
            <h3>Elena "Food Explorer"</h3>
            <p><strong>Specialization:</strong> Culinary and gastronomic tours</p>
            <p><strong>Bio:</strong> Elena is a culinary enthusiast who believes that the best way to understand a culture is through its food. Join her on a gastronomic journey through local markets, street food stalls, and hidden gems to savor the flavors that define each destination.</p>
        </div>

        <div class="guide">
            <img src="images/guide-2.jpeg" alt="Raj">
            <h3>Raj "Cultural Connoisseur"</h3>
            <p><strong>Specialization:</strong> Arts, museums, and cultural experiences</p>
            <p><strong>Bio:</strong> Raj is an expert in unraveling the cultural tapestry of any city. From art galleries to live performances, he provides insightful commentary on the cultural significance of each experience. Immerse yourself in the local arts scene with Raj as your guide.</p>
        </div>

        <div class="guide">
            <img src="images/guide-3.jpg" alt="Sophie">
            <h3>Sophie "Family Fun Guru"</h3>
            <p><strong>Specialization:</strong> Family-friendly tours and activities</p>
            <p><strong>Bio:</strong> Sophie understands the importance of family time. Her tours are designed to cater to families, with a focus on engaging activities that captivate both kids and adults. Explore family-friendly attractions with Sophie for a vacation everyone will cherish.</p>
        </div>

        <!-- Add more guides as needed -->

    </section>
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

</body>

</html>
