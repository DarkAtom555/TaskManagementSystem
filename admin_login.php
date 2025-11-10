<?php
 session_start();
  include('includes/connect.php');
  if(isset($_POST['adminLogin'])){
  	$query="select email,password,name from admins where email='$_POST[email]' and password='$_POST[password]'";
  	$q=mysqli_query($con,$query);
  	if(mysqli_num_rows($q)){
  			while($row=mysqli_fetch_assoc($q)){
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
  		}
  		echo "<script type='text/javascript'> 
      window.location.href='admin_dashboard.php';
      </script>";
  	}else{
  			echo "<script type='text/javascript'>
  			 alert('Please Enter Correct Details.');
         window.location.href='admin_login.php';
      </script>";
  	}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap cdn css js -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Employee TMS | Admin Login</title>
</head>
<body>
	<div class="row">
		<div class="col-md-3 m-auto" id="login_home_page">
			<center><h3 style="background-color: #5A8F7B; padding: 5px; width: 20vw; border-radius: 100px;">Admin Login</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<input type="email" name="email" style="margin-bottom: 20px; border-radius: 30px;  width: 44vw;" class="form-control" placeholder="Enter Email" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" style="margin-bottom: 20px;border-radius: 30px;  width: 44vw;" class="form-control" placeholder="Enter Password" required>
				</div>
				<div class="form-group">
					<center><input type="submit" name="adminLogin" style="border-radius: 100px;" class="btn btn-warning" value="Login" required></center>
				</div>
			</form><br>
			<center><a href="index.php" class="btn btn-danger">Go to Home</a></center>
		</div>
	</div>
</body>
</html>