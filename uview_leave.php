<?php 
session_start();
if(isset($_SESSION['email'])){
include("includes/connect.php");
?>

<html >
<body>
	<center><h3>YOUR LEAVE APPLICATIONS</h3></center><br>
	<table class="table" style="background-color:whitesmoke;width: 75vw;">
		<tr>
			<th>S.No</th>
			<th>Subject</th>
			<th style="width:40%;">Message</th>
			<th>Status</th>
		</tr>
     <?php 
      $sno=1;
      $query="select * from leaves where uid=$_SESSION[uid]";
      $q=mysqli_query($con,$query);
        while ($row=mysqli_fetch_assoc($q)) {
       ?>
       <tr>
       <td><?php echo $sno; ?></td>
       <td><?php echo $row['subject']; ?></td>
       <td><?php echo $row['message']; ?></td>
       <td><?php echo $row['status']; ?></td>
   </tr>
        <?php 
         $sno++;
       };
   ?>
	</table>
</body>
</html>
<?php 
}else{
   header("Location:user_login.php");
 }?>
