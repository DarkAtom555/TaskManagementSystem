<?php
session_start();
if(isset($_SESSION['email'])){
include("includes/connect.php");

if (isset($_POST['create_task'])) {
	$query="insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
	$q=mysqli_query($con,$query);
	if($q){
		echo "<script type='text/javascript'> 
		alert('Task Created Successfully...');
      window.location.href='admin_dashboard.php';
      </script>";
  	}else{
  			echo "<script type='text/javascript'>
  			 alert('Error..Plz try again.');
         window.location.href='admin_dashboard.php';
      </script>";
  	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<!-- Bootstrap -->
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">	
    <!-- jQuery code -->
    <script type="text/javascript">
    	$(document).ready(function() {
    		$("#create_task").click(function(){
    			$("#right_sidebar").load("create_task.php");
    		});
    	});
    	$(document).ready(function() {
    		$("#manage_task").click(function(){
    			$("#right_sidebar").load("manage_task.php");
    		});
    	});
    	$(document).ready(function() {
    		$("#view_leave").click(function(){
    			$("#right_sidebar").load("view_leave.php");
    		});
    	});
    </script>
</head>
<body>
	<!-- Header Code -->
	<div class="row" id="header">
		<div class="col-md-12">
			<div class="col-md-4" style="display: inline-block;">
				<h3>Task Management System</h3>
			</div>
		<div class="col-md-6" style="display: inline-block; text-align:right;">
		    <b>Email: </b><?php echo $_SESSION['email']; ?>
		    <span style="margin-left: 25px;"><b>Name: </b><?php echo $_SESSION['name']; ?></span>		
		</div>
		</div>
	</div>
	<!-- Header ends here -->
	<div class="row">
		<div class="col-md-2" id="left_sidebar">
			<table class="table">
				<tr>
					<td style="text-align: center;"><a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"class="link"><a type="button"  id="create_task">Create Task</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"class="link"><a  type="button" id="manage_task">Manage Task</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"class="link"><a type="button" id="view_leave">Leave Applications</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"><a href="logout.php" type="button"id="logout_link">Logout</a></td>
				</tr>
			</table>
		</div>
		<div class="col-md-10" id="right_sidebar">
			<h4>Instructions for Admins</h4>
			<ul style="line-height: 3em;font-size: 1.2em;list-style-type: none;">
				<li>1. All the employee should mark their attendence daily.</li>
				<li>2.Everyone must complete the task assigned to them.</li>
				<li>3.Kindly maintain decorum of the office.</li>
				<li>4.Keep Office and your area neat and clean.</li>
			</ul>
		</div>
	</div>
</body>
</html>
<?php 
}else{
 header("Location:admin_login.php");
 };
 ?>
