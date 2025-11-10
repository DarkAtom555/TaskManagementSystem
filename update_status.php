<?php 
  include("includes/connect.php");
  if(isset($_POST['update_status'])){
  	$query="update tasks set status='$_POST[status]' where tid=$_GET[id]";
  	$q=mysqli_query($con,$query);
     if($q){
		echo "<script type='text/javascript'> 
		alert('Status Updated Successfully...');
      window.location.href='user_dashboard.php';
      </script>";
  	}else{
  			echo "<script type='text/javascript'>
  			 alert('Error..Plz try again.');
         window.location.href='user_dashboard.php';
      </script>";
  	}
  }
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Task Management System</title>
	<!-- Bootstrap -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<!-- Header Code -->
	<div class="row" id="header">
		<div class="col-md-12">
			<i class="fa fa-solid fa-list" style="padding-right: 15px;">
				<h3>Task Management System</h3>
			</i>
		<div class="col-md-4 m-auto" style="color:white;"><br>
		 	<h3 style="color:white;">Update the Status</h3><br>
		 	<?php
             $query="select * from tasks where tid=$_GET[id]";
              $q=mysqli_query($con,$query);
              while ($row=mysqli_fetch_assoc($q)) {
                  ?>
		 	<form action="" method="post">
		 		<div class="form-group">
		 			<input type="hidden" name="id" class="form-control" value="" required>
		 		</div>
		 		<div class="form-group">
		 				<select name="status" class="form-control" >
		 					<option>-Select-</option>
		 					<option>In-Progress</option>
		 					<option>Complete</option>
		 					<option>Need extra 1 week</option>
		 				</select>
				</div><br>
				<center><input type="submit" class="btn btn-warning" name='update_status' value="Update"></center>	
		 	</form>
		 	<?php 
               }
		 	 ?>
		</div>
		</div>
</body>
</html>