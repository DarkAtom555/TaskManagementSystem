<?php 
  include("includes/connect.php");
  	$query="delete from tasks where tid=$_GET[id]";
  	$q=mysqli_query($con,$query);
     if($q){
		echo "<script type='text/javascript'> 
		alert('Task Deleted Successfully...');
      window.location.href='admin_dashboard.php';
      </script>";
  	}else{
  			echo "<script type='text/javascript'>
  			 alert('Error..Plz try again.');
         window.location.href='admin_dashboard.php';
      </script>";
  	}
  
 ?>