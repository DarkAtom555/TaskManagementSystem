<?php 
session_start();
if(isset($_SESSION['email'])){
include("includes/connect.php");
?>

<html >
<body>
	<center><h3>ALL LEAVE APPLICATIONS</h3></center><br>
	<table class="table" style="background-color:whitesmoke;width: 75vw;">
		<tr>
			<th>S.No</th>
			<th>User</th>
			<th>Subject</th>
			<th style="width:40%;">Message</th>
			<th>Status</th>
			<th style="text-align:center;">Action</th>
		</tr>
     <?php 
      $sno=1;
      $query="select * from leaves";
      $q=mysqli_query($con,$query);
        while ($row=mysqli_fetch_assoc($q)) {
       ?>
       <tr>
       <td><?php echo $sno; ?></td>
       <?php   $query1="select name from users where uid=$row[uid]";
         $q1=mysqli_query($con,$query1);
       while ($row1=mysqli_fetch_assoc($q1)) {
       ?>
       <td><?php echo $row1['name'];}; ?></td>
       <td><?php echo $row['subject']; ?></td>
       <td><?php echo $row['message']; ?></td>
       <td><?php echo $row['status']; ?></td>
       <td style="text-align:center;"><a href="approve_leave.php?id=<?php echo $row['lid'];?>" style="text-decoration: none; color: green;">Approve</a> | <a href="reject_leave.php?id=<?php echo $row['lid'];?>" style="text-decoration: none; color: red;">Reject</a></td>
   </tr>
        <?php 
         $sno++;
       }
   ?>
	</table>
</body>
</html>
<?php 
 }else{
header("Location:admin_login.php");
 }
 ?>