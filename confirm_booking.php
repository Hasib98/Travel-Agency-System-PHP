<?php
session_start();
$idToConfirm = $_SESSION['idToConfirm'];


$locationToConfirm = $_SESSION['locationToConfirm'];
$guestToConfirm = $_SESSION['guestToConfirm'];
$arrivalsToConfirm = $_SESSION['arrivalsToConfirm'];
$leavingToConfirm = $_SESSION['leavingToConfirm'];
$rateToConfirm = $_SESSION['rateToConfirm'];


$arrivalsDate = new DateTime($arrivalsToConfirm);
$leavingTDate = new DateTime($leavingToConfirm);
$interval = $arrivalsDate->diff($leavingTDate);
$daysDifference = $interval->days;
echo  "........\n";


echo $idToConfirm;
echo  "........\n";
echo $locationToConfirm;
echo  ".........\n";
echo $guestToConfirm;
echo  ".........\n";
echo $arrivalsToConfirm;
echo  "........\n";
echo $leavingToConfirm;
echo  "...........\n";
echo $rateToConfirm;
echo  "........\n";

echo $daysDifference;



$amount = $guestToConfirm * $rateToConfirm * $daysDifference;
echo  "............\n";
echo " ";
echo $amount;

?>

<?php
$firstname = null;
$lastname =  null;


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
                <a href="book.php">book</a>
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
    
    <!-- package section ends -->






    <!-- book section starts -->
    <section class="booking">
        <form method="post" class="book-form">
            <h1 class="heading-title">Confirm Booking</h1>
            <h1 style="font-size: 300%" class="heading-title">of <?php echo $firstname;
                                                                    echo " ";
                                                                    echo $lastname; ?></h1>

            <h2 style="font-size: 200%" class="heading-title"><?php echo $locationToConfirm ?></h2>
            <h3 style="font-size: 200%" class="heading-title"><?php echo "Number of Guests: ";
                                                                echo $guestToConfirm ?></h3>
            <h3 style="font-size: 200%" class="heading-title"><?php echo "Number of Days: ";
                                                                echo $daysDifference ?></h3>
            <h3 style="font-size: 200%" class="heading-title"><?php echo "Total Amount: ";
                                                                echo $amount ?></h3>
            <div class="flex">

                <div class="inputBox">
                    <span>Pay the amount in mobile banking and input the payment id :</span>
                    <input type="text" placeholder="Enter your Payment ID" name="pid" id="pid">
                    <button class="btn" name="pkg_confirm_btn" id="login" type="submit">Confirm</button>
                </div>
                <!-- <input type="submit" class="btn" name="btn" id="login" > -->
                
                
            </div>
        </form>
    </section>
    <!-- book section ends -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"   && isset($_POST['pkg_confirm_btn'])) {
        $pid = $_POST['pid'];
        // $query_insert = "update bookings set (status,pid,amount) values ('pending','$pid','$amount')";
        $pending = "pending";
        $query_insert = "update bookings  set status = '". $pending."', pid = '". $pid."', amount = '". $amount."'   WHERE id = " . $idToConfirm;
        //echo $query_insert;
        require('admin/db.php');
        mysqli_query($mysqli, $query_insert);

        
        sleep(1);
        header('location:booking_history.php');
        // //ob_end_flush();
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