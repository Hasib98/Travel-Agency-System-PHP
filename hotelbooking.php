<?php

require_once('admin/db.php');

if ($result = $mysqli->query("SELECT * FROM hotels")) {
  // echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  // echo $result->free_result();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
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
        <a href="home.php">Home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="hotelbooking.php">hotel booking</a>
        <a href="login.php">login</a>
        <!-- <a href="registration.php">registration</a> -->
    </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->



<div class="heading" style="background: url(images/hotel.jpg) no-repeat;">
<h1>book now</h1>
</div>

<!-- book section starts -->
<section class="booking">
    <h1 class="heading-title">book your room!</h1>
    <form action="hotel_book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Hotel :</span><br/> 
                <select required id="hotel_id" name="hotel_id" class="book-form" style="width: 100%;background: #fff;border: 1px solid black;">
                    <!-- <option selected disabled> Select</option> -->
                    <?php foreach ($result as $key => $value) {?>
                            <option value=" <?php echo $value['id'] ?> "> <?php echo $value['name'] ?></option> </option>
                        <?php } ?>
                    

                </select>
            </div>
            <div class="inputBox">
                <span>Room :</span><br/> 
                <select required id="room_id" name="room_id" class="book-form" style="width: 100%;background: #fff;border: 1px solid black;">
                    

                </select>
            </div>
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your phone number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrival :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!-- book section ends -->


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



















<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js link -->
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    $('#hotel_id').on('change',function(){
        id = $(this).val();
        
        $.ajax({
        url: "admin/get-rooms.php?hotel_id="+id,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            htmls = ``;
            res.forEach(element => {
              html = `<option value="`+element.id+`"> `+element.name+` </option>`;
              htmls += html;
            });

            $('#room_id').html(htmls);

            // $('#rooms').modal('show');
        }
    });

    })
</script>

</body>
</html>