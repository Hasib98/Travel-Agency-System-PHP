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
    
</head>
<body>
<div>
    
        <form >
            <div class="container">

            <div class="row">
                <div class="col-sm-3">
            
                <h1>login Now</h1>
                <hr class="mb-3">


                <label for="email"><b>Email Address</b></label>
                <input class="form-control" value="" id="email" name="email" required>



                <label for="password"><b>Password</b></label>
                <input class="form-control" value="" id="password" name="password" required>


                <hr class="mb-3">
                <button type="btn btn-primary" name="btn" id="login" class="btn login_btn">Login</button> 
                
					<br> Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a> </br>
				</div>
                </div>
                </div>    
            </div>
        </form>
    </div>
				
				
			
			



<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var email = $('#email').val();
				var password = $('#password').val();
				if( email == "" || password == "")
				{
					location.replace("https://www.w3schools.com");
				}
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {email: email, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "home.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>