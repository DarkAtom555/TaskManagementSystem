<?php 
session_start();
if(isset($_SESSION['email'])){
include("includes/connect.php");
if (isset($_POST['submit_leave'])) {
      $query="insert into leaves values(null,$_SESSION[uid],'$_POST[subject]','$_POST[message]','No Action')";
      $q=mysqli_query($con,$query);
      if($q){
		echo "<script type='text/javascript'> 
		alert('Leave Applied Successfully...');
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Dashboard</title>
	<!-- Bootstrap -->
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">	
     <script type="text/javascript">
    	$(document).ready(function() {
    		$("#task").click(function(){
    			$("#right_sidebar").load("task.php");
    		});
    	});
    	$(document).ready(function() {
    		$("#apply_leave").click(function(){
    			$("#right_sidebar").load("apply_leave.php");
    		});
    	});
    	$(document).ready(function() {
    		$("#uview_leave").click(function(){
    			$("#right_sidebar").load("uview_leave.php");
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
		    <span style="margin-left: 25px;"><b>Name: </b><?php echo $_SESSION['name'] ?></span>		
		</div>
		</div>
	</div>
	<!-- Header ends here -->
	<div class="row">
		<div class="col-md-2" id="left_sidebar">
			<table class="table">
				<tr>
					<td style="text-align: center;"><a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"><a id='task' type="button" class="link">Update Task</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"><a id=apply_leave type="button"class="link">Apply Leave</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"><a id="uview_leave" type="button"class="link">Leave Status</a></td>
				</tr>
				<tr>
					<td style="text-align: center;"><a href="logout.php" type="button"id="logout_link">Logout</a></td>
				</tr>
			</table>
		</div>
		<div class="col-md-10" id="right_sidebar">
			<h4>Instructions for Employees</h4>
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
	}
	else{
      header("Location:user_login.php") ;
   }
	
?>