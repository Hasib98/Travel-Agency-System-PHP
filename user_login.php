<?php
require_once 'session.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />


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
    <!-- <section >
		<form>
			
				<h1>Login</h1>
				<div>
					<label for="username">Email:</label>
					<input type="text" name="email" id="email">
				</div>
				<div>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password">
				</div>
				<section>
					<button name="btn" id="login" type="submit">Login</button>
					<a href="registration.php">Register</a>
				</section>

			<!-- <div class="container">

            <div class="row">
                <div class="col-sm-3">
            
                <h1>login Now</h1>
                <hr class="mb-3">


                <label for="email"><b>Email Address</b></label>
                <input class="form-control" value="phoenixoffire1998@gmail.com" id="email" name="email" required>



                <label for="password"><b>Password</b></label>
                <input class="form-control" value="1234" id="password" name="password" required>


                <hr class="mb-3">
                <button type="btn btn-primary" name="btn" id="login" class="btn login_btn">Login</button> 
                
					<br> Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a> </br>
				</div>
                </div>
                </div>    
            </div> 
		</form>
	</section> -->


    <!-- book section starts -->
    <section class="booking">
        <form action="book_form.php" method="post" class="book-form">
            <h1 class="heading-title">Login</h1>
            <div class="flex">
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" id="email">
                </div>

                <div class="inputBox">
                    <span>Password :</span>
                    <input type="password" placeholder="enter your password" name="password" id="password">
                </div>


                <!-- <input type="submit" class="btn" name="btn" id="login" > -->
                <button class="btn" name="btn" id="login" type="submit">Login</button>
                Don't have an account?<a href="registration.php">Sign Up</a>
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





    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#login').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {
                    var email = $('#email').val();
                    var password = $('#password').val();
                    if (email == "" || password == "") {
                        //location.replace("https://www.w3schools.com");
                        //  swal.fire({
                        //      icon: "error",
                        //      title: "Email or Password Fields are Empty",
                        //      text: "Please Type your email and password"
                        //      showCloseButton: true
                        //  })

                        alert("Email or Password Fields are Empty");
                        location.replace("user_login.php");
                       

                    }
                }

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'jslogin.php',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(data) {
                        //alert(data);
                        if ($.trim(data) === "1") {
                            setTimeout(' window.location.href =  "home.php"', 1000);
                        } else {
                            swal.fire({
                                icon: "error",
                                title: "Wrong Email or Password",
                                text: "Please Type your email and password Correctly or If you new here please register"
                            })
                        }
                    },
                    error: function(data) {
                        alert('there were erros while doing the operation.');
                    }
                });

            });
        });
    </script>
</body>

</html>