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
</head>
<body>
    <div>
        <?php
            if(isset($_POST['create'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $phonenumber = $_POST['phonenumber'];
                $password = $_POST['password'];

                $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES (?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
                if($result){
                    echo 'Sucessfully saved';
                }else{
                    echo 'There were errors while saving the data';
                }
            }
        ?>
    </div>
    <div>
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
                <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up" >
                </div>
                </div>    
            </div>
        </form>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jquery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- sweet alert link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
    </script>
</body>
</html>