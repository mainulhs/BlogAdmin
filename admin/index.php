
<?php include '../core/dbe.inc.php';?>
<?php
	if(isset($_POST['submit']))
		{
			session_start();
			//variables 
			$users =$_POST['userName'];
			$password=$_POST['password'];
			$select = "select * from login where username='$users' and password='$password'";
			$row_num = login($select);
    
           if ( $row_num  > 0 ){
					header('location: dashboard.php');
					$_SESSION['userName']=$users;
           }
           else{
				echo "<script type='text/javascript'>alert('Invalid Username or Password.');</script>";	
           }	
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel|Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../public/assets/css/form-elements.css">
        <link rel="stylesheet" href="../public/assets/css/style.css">
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>ADMIN PANEL LOGIN</strong></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Admin Panel</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" method="POST" class="login-form" enctype="multipart/form-data">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="userName" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn" name="submit">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="../public/assets/js/jquery-1.11.1.min.js"></script>
        <script src="../public/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../public/assets/js/jquery.backstretch.min.js"></script>
        <script src="../public/assets/js/scripts.js"></script>

    </body>

</html>