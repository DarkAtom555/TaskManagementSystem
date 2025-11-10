<html><body>
	<h3>Create a new Task</h3>
	<div class="row">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="form-group">
					<label for="">Select User:</label>
					<select name="id" id="" class="form-control">
						<option>-Select-</option>
						<?php 
                          include("includes/connect.php");
                          $query="select uid,name from users";
                          $q=mysqli_query($con,$query);
                          if(mysqli_num_rows($q)){
                           while ($row=mysqli_fetch_assoc($q)) {
                           	?>
                           	<option value="<?php echo $row['uid'] ;?>"><?php echo $row['name']; ?></option>
                           	<?php 
                           }
                          }
						 ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Description:</label>
					<textarea name="description" placeholder="Mention the Task" class="form-control" rows="3" cols="50" id=""></textarea>
				</div>
				<div class="form-group">
					<label for="">Start Date:</label>
					<input type="date" class="form-control" name="start_date">
				</div>
				<div class="form-group">
					<label for="">End Date:</label>
					<input type="date" class="form-control" name="end_date">
				</div><br>
				<center><input type="submit" class="btn btn-warning" name='create_task' value="Create"></center>
			</form>
		</div>
	</div>
</body>
</html>