<?php
require_once('config.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <div>
        <?php
        if (isset($_POST['create'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES (?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
            if ($result) {
                echo 'Sucessfully Saved';
            } else {
                echo 'There were errors while saving the data';
            }
        }
        ?>
    </div>

    <!-- book section starts -->
    <section class="booking">
        <form action="registration.php" method="post" class="book-form">
            <h1 class="heading-title">Register Now</h1>
            <div class="flex">
                <div class="inputBox">
                    <span>First Name :</span>
                    <input placeholder="Enter your First Name" name="firstname" id="firstname">
                </div>
                <div class="inputBox">
                    <span>Last Name :</span>
                    <input placeholder="Enter your Last Name" name="lastname" id="lastname">
                </div>

                <div class="inputBox">
                    <span>Email Address :</span>
                    <input placeholder="Enter your Email" name="email" id="email">
                </div>
                <div class="inputBox">
                    <span>Phone Number :</span>
                    <input placeholder="Enter your Phone Number" name="phonenumber" id="phonenumber">
                </div>

                <div class="inputBox">
                    <span>Password :</span>
                    <input type="password" placeholder="Enter your password" name="password" id="password">
                </div>

                <div class="inputBox">
                    <span>Confirm Password :</span>
                    <input type="password" placeholder="Re-Type your password" name="password" id="password">
                </div>


                <!-- <input type="submit" class="btn" name="btn" id="login" > -->
                <!-- <button class="btn" name="btn" id="login" type="submit">Login</button> -->
                <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
        </form>
    </section>
    <!-- book section ends -->
    <!-- <div>
        <form action="registration.php" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3">

                        <h1>Registration Now</h1>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" id="firstname" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" id="lastname" name="lastname" required>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" id="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" id="phonenumber" name="phonenumber" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" name="password" required>

                        <label for="confirmpassword"><b>Confirm Password</b></label>
                        <input class="form-control" id="confirmpassword" name="confirmpassword" required>

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div> -->

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


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jquery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- sweet alert link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function() {
            $('#register').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {


                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var phonenumber = $('#phonenumber').val();
                    var password = $('#password').val();


                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            phonenumber: phonenumber,
                            password: password
                        },
                        success: function(data) {
                            /*swal.fire({
                                        title: "Success!",
                                        text: "Redirecting in 2 seconds.",
                                        type: "success",
                                        timer: 2000,
                                        showConfirmButton: false
                                    }

                                )
                                .then(isOkey) => {

                                    if (isOkey) {
                                        function() {
                                            window.location = "https://www.w3schools.com/";
                                        }
                                    }
                                }*/


                            Swal.fire({
                                title: "Success! Click okey to Login"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // If user clicks "Yes, redirect!" button, redirect them
                                    window.location.href = 'user_login.php'; // Replace with your desired URL
                                }
                            });


                        },
                        error: function(data) {
                            swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                            })
                        }
                    });
                } else {

                }





            });


        });
    </script>
</body>

</html>