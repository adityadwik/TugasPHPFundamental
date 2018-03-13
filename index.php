<?php
session_start();
ini_set('display_errors', 0);
if($_SESSION["salah"] >= 3){
echo "<script>alert('Anda Diblokir'); window.location = ('error.php')</script>";
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>css botstrap4</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    </head>
    <body>
        <div class="container">
	<div class="login-form col-md-4 offset-md-4" >
            <h1 class="title" style="background-color: grey"> <img src="assets/images/image.png" width="50" height="50">login</h1>
            <form method="post" action="login.php" class="form-signin">
			<div class="form-group">
				<label>USERNAME</label>
                                <input class="form-control" name="username"  type="text" placeholder="Username" autofocus="yes" autocomplete="no" required="">
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
                                <input class="form-control" name="password" type="password" placeholder="Password" required="">
			</div>
			<div class="checkbox mb-3">
				<input type="checkbox"> Remember me
			</div>
                    <button class="btn btn-primary btn-block" style="background-color: grey;">Sign In</button>
                    <div class="text-right forget">
                        <a class="btn btn-link" href="/password/reset">Forgot Password ?</a>
                    </div>
                </form>
	</div>
	</div>
        
    </body>
</html>
