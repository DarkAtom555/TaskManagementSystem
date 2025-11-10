<?php 
include("includes/connect.php");
?>

<html >
<body>
	<center><h3>All assigned Tasks</h3></center><br>
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
      $query="select * from tasks";
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
       <td><a href="edit_task.php?id=<?php echo $row['tid'];?>" style="text-decoration: none; color: green;">Edit</a> | <a href="delete_task.php?id=<?php echo $row['tid'];?>" style="text-decoration: none; color: red;">Delete</a></td>
   </tr>
        <?php 
         $sno++;
       }
   ?>
	</table>
</body>
</html>