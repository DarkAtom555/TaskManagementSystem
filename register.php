<?php
  include('includes/connect.php');
  if(isset($_POST['userRegister'])){
  	$query="insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
  	$q=mysqli_query($con,$query);
  	if($q){
  		echo "<script type='text/javascript'> 
  		alert('User registered Succesfully....');
      window.location.href='index.php';
      </script>";
  	}else{
  			echo "<script type='text/javascript'>
  			 alert('Error...Plz Try again');
         window.location.href='register.php';
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
	<title>Employee TMS | Register Page</title>
</head>
<body>
	<div class="row">
		<div class="col-md-3 m-auto" id="register_home_page">
			<center><h3 style="background-color: #5A8F7B; padding: 5px; width: 20vw; border-radius: 100px;">User Registration</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="name" style="margin-bottom: 20px; border-radius: 30px;  width: 44vw;" class="form-control" placeholder="Enter Name" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" style="margin-bottom: 20px; border-radius: 30px;  width: 44vw;" class="form-control" placeholder="Enter Email" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" style="margin-bottom: 20px;border-radius: 30px;  width: 44vw;" class="form-control" placeholder="Enter Password" required>
				</div>
				<div class="form-group">
					<input type="text" name="mobile" style="margin-bottom: 20px; border-radius: 30px;  width: 44vw;" class="form-control" maxlength="10" placeholder="Enter 10 digit Phone No. +91-" required>
				</div>
				<div class="form-group">
					<center><input type="submit" name="userRegister" style="border-radius: 100px;" class="btn btn-warning" value="Register" required></center>
				</div>
			</form><br>
			<center><a href="index.php" class="btn btn-danger">Go to Home</a></center>
		</div>
	</div>
</body>
</html>