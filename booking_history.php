<?php
$firstname = null;
$lastname =  null;

session_start();
ob_start();
if (isset($_SESSION['user_login'])) {
    $user = $_SESSION['user_login'];
    $firstname = $user['firstname'];
    $lastname = $user['lastname'];
    $email = $user['email'];
    $id = $user['id'];
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
            <?php
            if (null != ($firstname && $lastname)) {
                echo '



                <a href="home.php">Home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <!-- <a href="book.php">book</a> -->
                <a href="">' . $firstname . '</a>
                <a href="">' . $lastname . '</a>
                <a href="logout.php">Logout</a>

                
                ';
            } else {
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

    <!-- package section starts -->
    <section class="packages">
        <h1 class="heading-title">Booking History</h1>
        <h1 style="font-size: 300%" class="heading-title">of <?php echo $firstname;
                                                                echo " ";
                                                                echo $lastname; ?></h1>
        <div class="box-container">

            <?php
            require_once('admin/db.php');
            $query = "SELECT * FROM bookings WHERE email = '" . $email . "'";
            //$query2 = "SELECT image from packages where title='Bandarban'";
            //echo $query2;


            if ($result = $mysqli->query($query)) {
                // echo "Returned rows are: " . $result -> num_rows;
                // Free result set
                // echo $result->free_result();
            }
            ?>
            <?php foreach ($result as $item) { ?>
                <div class="box">
                    <div class="image">
                        <img src="admin/<?php
                                        $query2 = "select * from packages where title='" .$item['location']. "'";
                                        if ($result2 = $mysqli->query($query2)) {
                                            $row = $result2->fetch_assoc();


                                            //print_r($row);
                                            //echo $row["image"];
                                            $image = $row["image"];
                                            $rate = $row["rate"];
                                            //echo $image;
                                        }
                                        echo $image;
                                        ?>">
                    </div>


                    <div class="content">
                        <h3><?php echo $item['location'] ?></h3>
                        <h3 style="color: darkcyan"><?php echo "("; echo $item['status']; echo ")"; ?></h3>
                        
                        <p style="color: green"><?php echo "ID number: ";
                                                echo $item['id'] ?></p>
                        <p style="color: green"><?php echo "Per person Rate: ";
                                                echo $rate ?></p>
                        <p style="color: green"><?php echo "Number of Guests: ";
                                                echo $item['guests'] ?></p>
                        <p style="color: maroon"></p><?php echo "Arrival Time: ";
                                                        echo $item['arrivals'] ?></p>
                        <p style="color: maroon"></p><?php echo "Leaving Time: ";
                                                        echo $item['leaving'] ?></p>
                        <p style="color: blue"><?php echo "Address of Guest: ";
                                                echo $item['address'] ?></p>
                        <p style="color: magenta"><?php echo " Phone Number of Guest: ";
                                                    echo $item['phone'] ?></p>
                        
                        
                        <?php
                        if( $item['status'] != "Approved")
                        {
                         echo

                            '<form method="post">
                            <input type="hidden" name="id_to_cancel" value="'.$item['id'].'">
                            <button type="submit" name="cancel_button" class="btn btn-danger">Cancel</button>
                        </form>
                        <form method="post">
                            <input type="hidden" name="id_to_confirm" value="'.$item['id'].'">
                            <input type="hidden" name="location_to_confirm" value="'.$item['location'].'">
                            <input type="hidden" name="guest_to_confirm" value="'.$item['guests'].'">
                            <input type="hidden" name="arrivals_to_confirm" value="'.$item['arrivals'].'">
                            <input type="hidden" name="leaving_to_confirm" value="'.$item['leaving'].'">
                            <input type="hidden" name="rate_to_confirm" value="'.$rate.'">
                            <button type="submit" name="confirm_button" class="btn btn-danger">Confirm</button>
                        </form>';

                        }
                        
                        
                        ?>
                        
                    </div>
                </div>


            <?php } ?>
        </div>

        <!-- <div class="load-more"><span class="btn">load more</span></div> -->
    </section>
    <!-- package section ends -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"   && isset($_POST['cancel_button'])) {
        $idToCancel = $_POST['id_to_cancel'];
        $query_delete = "DELETE FROM bookings WHERE id = " . $idToCancel;

        echo $query_delete;
        require('admin/db.php');
        if ($result = $mysqli->query($query_delete)) {
        }
        sleep(1);
        header('location: booking_history.php');
        //ob_end_flush();
    }
    ?>
    <!-- Confirm Section -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"   && isset($_POST['confirm_button'])) {

        $idToConfirm = $_POST['id_to_confirm'];
        $locationToConfirm = $_POST['location_to_confirm'];
        $guestToConfirm = $_POST['guest_to_confirm'];
        $arrivalsToConfirm = $_POST['arrivals_to_confirm'];
        $leavingToConfirm = $_POST['leaving_to_confirm'];
        $rate = $_POST['rate_to_confirm'];
        session_start();
        $_SESSION['idToConfirm'] = $idToConfirm;
        $_SESSION['locationToConfirm'] = $locationToConfirm;
        $_SESSION['guestToConfirm'] = $guestToConfirm;
        $_SESSION['arrivalsToConfirm'] = $arrivalsToConfirm;
        $_SESSION['leavingToConfirm'] = $leavingToConfirm;
        $_SESSION['rateToConfirm'] = $rate;
        header('location: confirm_booking.php');
        // $query_confirm = "DELETE FROM bookings WHERE id = " . $idToConfirm;

        // echo $query_confirm;
        // require('admin/db.php');
        // if ($result = $mysqli->query($query_confirm)) {
        // }
        // sleep(1);
        // header('location: booking_history.php');
        //echo "Deleted";
        //ob_end_flush();
    }
    ?>











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