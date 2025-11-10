<?php 
include("includes/connect.php");
$query="update leaves set status='Approved' where lid=$_GET[id]";
$q=mysqli_query($con,$query);
	if($q){
		echo "<script type='text/javascript'> 
		alert('Leave Approved Successfully...');
      window.location.href='admin_dashboard.php';
      </script>";
  	}else{
  			echo "<script type='text/javascript'>
  			 alert('Error..Plz try again.');
         window.location.href='admin_dashboard.php';
      </script>";
  	}
 ?>