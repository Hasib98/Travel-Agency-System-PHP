<?php
session_start();
require_once('config.php');


$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


//&email = $_POST['email'];
//$password = $_POST['password'];

/*if(isset($_POST['email']) && isset($_POST['passowrd']) &&....)
{
    // If isset then assign data to variable $name = $_POST['name'],...
}
else
{
    // Redirect to the error page
}

/*if($email == "" || $password = "")
{
	echo 'Fields cannot be empty';
	
}*/

$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);

if ($result) {
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if ($stmtselect->rowCount() > 0) {
		$_SESSION['user_login'] = $user;
		echo '1';
	} else {
		if ($email == "" || $password = "") {
			echo 'Fields cannot be empty';
		}
		else{ echo 'There no user for that combo'; }

		
	}
} else {
	echo 'There were errors while connecting to database.';
}
