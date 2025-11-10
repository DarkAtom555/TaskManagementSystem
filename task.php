<?php 
session_start();
include("includes/connect.php");
?>

<html lang="en">
<body>
	<center><h3>Your Tasks</h3></center>
		<table class="table" style="background-color:whitesmoke;width: 75vw;">
		<tr>
			<th>S.No</th>
			<th>Task Id</th>
			<th>Description</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
<?php 
      $sno=1;
      $query="select * from tasks where uid=$_SESSION[uid]";
      $q=mysqli_query($con,$query);
        while ($row=mysqli_fetch_assoc($q)) {
       ?>
       <tr>
       <td><?php echo $sno; ?></td>
       <td><?php echo $row['tid']; ?></td>
       <td><?php echo $row['description']; ?></td>
       <td><?php echo $row['start_date']; ?></td>
       <td><?php echo $row['end_date']; ?></td>
       <td><?php echo $row['status']; ?></td>
       <td><a href="update_status.php?id=<?php echo $row['tid'];?>" style="text-decoration: none; color: green;">Update</a></td>
   </tr>
        <?php 
         $sno++;
       }
   ?>
</body>
</html>