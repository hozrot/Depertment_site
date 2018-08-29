<?php include 'include/condb.php';?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../bootstrap/css/datepicker.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<script src="../bootstrap/js/bootstrap-datepicker.js"></script>
	<script>
		$(function(){
			$('.datepicker').datepicker();
		});

	</script>
	
</head>
<body>
	<?php include 'include/header.php';?>
	<div style="width:50px;height:60px;"></div>
	<?php include 'include/sidebar.php';?>
	
	
	<div class="col-lg-8">
		<div class="page-header"> <h1>Add Student</h1> </div>
		<div class="container-fluid">
			<form class="form-horizontal" enctype="multipart/form-data" action="add-student.php" method="post">
				
				<div class="form-group">
					<label for="first-name"> First Name </label>
					<input  id="first-name" type="text" name="first_name" class="form-control"  >
				</div>
				<div class="form-group">
					<label for="last-name"> Last Name </label>
					<input  id="last-name" type="text" name="last_name" class="form-control"  >
				</div>
				<div class="form-group">
					<label for="photo"> Profile Photo </label>
					<input  id="photo" type="file" name="student_photo" class="btn btn-success">
				</div>
				<div class="form-group">
					<label for="email"> Email </label>
					<input  id="email" type="email" name="email" class="form-control"  >
					</divrequired					 
					<div class="form-group">
						<label for="depertment"> Depertment </label>
						<select class="form-control" id="depertment" name="depertment" >
							<?php
							$sql="SELECT * FROM depertment ";

							$run_sql=  mysqli_query($con,$sql);
							echo "<option > Select Depertment </option>";
							while ($rows= mysqli_fetch_array($run_sql)) {
								$depertment_name= $rows['depertment_name'];

								echo "<option > {$depertment_name}</option>";
							} 
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="id-no">Id no </label>
						<input  id="id-no" type="text" name="student_id" class="form-control" required  >
					</div>
					<div class="form-group">
						<label for="session"> Session </label>
						<select class="form-control" id="session" name="session" >
							<?php
							$sql="SELECT * FROM accademic_year ";

							$run_sql=  mysqli_query($con,$sql);
							echo "<option > Select Session </option>";
							while ($rows= mysqli_fetch_array($run_sql)) {
								$session= $rows['session'];

								echo "<option > {$session}</option>";
							} 
							?>
						</select>
					</div>				
					<div class="form-group">
						<label for="batch"> Batch </label>
						<select class="form-control" id="batch" name="batch" >
							<?php
							$sql="SELECT * FROM accademic_year ";

							$run_sql=  mysqli_query($con,$sql);
							echo "<option > Select Batch </option>";
							while ($rows= mysqli_fetch_array($run_sql)) {
								$batch= $rows['batch'];

								echo "<option > {$batch}</option>";
							} 
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="date_of_birth"> Date Of Birth  </label>
						<div class='input-group date' id='datetimepicker1'>
							<input type="text" name="date_of_birth" id="date" class="datepicker form-control">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>

					
					<div class="form-group">
						<label for="address"> Address</label>
						<input  id="address" type="text" name="address" class="form-control"  >
					</div>
					<div class="form-group">
						<label for="contact"> contact</label>
						<input  id="contact" type="text" name="contact" class="form-control"  >
					</div>

					



					<div class="form-group">
						<label for="a"> Gender </label>
						<div>
							<label class = "radio-inline">
								<input type = "radio" name = "gender" id = "male" value = "male"> Male
							</label>
							
							<label class = "radio-inline">
								<input type = "radio" name = "gender" id = "female" value = "female"> Female
							</label>
							<label class = "radio-inline">
								<input type = "radio" name = "gender" id = "other" value = "other"> Other
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="a"> Hall Name </label>
						<select class="form-control" id="hall" name="hall_name" >
							<?php
							$sql="SELECT * FROM hall ";

							$run_sql=  mysqli_query($con,$sql);
							echo "<option > Select Hall Name </option>";
							while ($rows= mysqli_fetch_array($run_sql)) {
								$hall_name= $rows['hall_name'];

								echo "<option > {$hall_name}</option>";
							} 
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="a"> Home town  </label>
						<select class="form-control" id="hometown" name="hometown">
							<?php
							$sql="SELECT * FROM hometown ";

							$run_sql=  mysqli_query($con,$sql);
							echo "<option > Select Home-town </option>";
							while ($rows= mysqli_fetch_array($run_sql)) {
								$town_name= $rows['town_name'];

								echo "<option > {$town_name}</option>";
							} 
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="submit"> </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					
					
				</form>
			</div>

			<?php 
			if (isset($_POST['submit'])) {

				$student_photo= $_FILES['student_photo']['name'];
				$student_photo_temp = $_FILES['student_photo']['tmp_name'];
				move_uploaded_file($student_photo_temp, "../images/$student_photo");

				$sql="INSERT INTO students(student_id, first_name, last_name, email, photo, depertment, session, batch, date_of_birth, 
					address, contact, gender, hall_name, hometown)
				VALUES (      '$_POST[student_id]',
					'$_POST[first_name]',
					'$_POST[last_name]',
					'$_POST[email]',
					'{$student_photo}',
					'$_POST[depertment]',
					'$_POST[session]',
					'$_POST[batch]',
					'$_POST[date_of_birth]',
					'$_POST[address]',
					'$_POST[contact]',
					'$_POST[gender]',
					'$_POST[hall_name]',
					'$_POST[hometown]'
					)";

				mysqli_query($con,$sql);


				} 
				?> 

<div class="panel panel-danger panel-responsive">
	<div class="panel-heading"> <h4> List Of Students   </h4> </div>
	<div class="panel-body">
		<table class="table table-hover ">
			<thead>
				
				<th>Name  </th>
				<th>Photo  </th>
				
				<th>Depertment</th>
				
				<th>Session</th>
				<th>Batch </th>
				<th>Id no. </th>


				
			</thead>
			<?php 
			$sql="SELECT * FROM students ";

			$run_sql=  mysqli_query($con,$sql);

			while ($rows= mysqli_fetch_array($run_sql)) { 
				echo'
				<tbody>
					<td>'.$rows['first_name'].'	'.$rows['last_name'].'</td>
					<td>  <img src="../images/'.$rows['photo'].'" width="120px"> </td>
					<td>'.$rows['depertment'].'  </td>
					<td>'.$rows['session'].'  </td>
					<td>'.$rows['batch'].'  </td>
					<td>'.$rows['student_id'].'  </td>
					 
					<td> <button type="button" class="btn btn-info view_student" id=" '.$rows['student_id'].' " data-toggle="modal" data-target="#myModal" 
					 				>View</button></td> 
				</tbody>
				';
			}
			?>
			
			
		</table>
	</div>
</div>
<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="panel panel-warning">
								<div class="panel-heading"> <h4 class="modal-panel"> View Information 
									 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

								 </h4> </div>
								<div class="panel-body">
							 
									<div class="modal-body">

																										<form class="form-horizontal" enctype="multipart/form-data" action="add-student.php" method="post">
																											
																											<div class="form-group">
																												<label for="first-name"> First Name </label>
																												<input  id="first-name" type="text" name="first_name" value="<?php echo "'.$rows[first_name].'";?> " class="form-control"  >
																											</div>
																											<div class="form-group">
																												<label for="last-name"> Last Name </label>
																												<input  id="last-name" type="text" name="last_name" class="form-control"  >
																											</div>
																											<div class="form-group">
																												<label for="photo"> Profile Photo </label>
																												<input  id="photo" type="file" name="student_photo" class="btn btn-success">
																											</div>
																											<div class="form-group">
																												<label for="email"> Email </label>
																												<input  id="email" type="email" name="email" class="form-control"  >
																												</divrequired					 
																												<div class="form-group">
																													<label for="depertment"> Depertment </label>
																													<select class="form-control" id="depertment" name="depertment" >
																														<?php
																														$sql="SELECT * FROM depertment ";

																														$run_sql=  mysqli_query($con,$sql);
																														echo "<option > Select Depertment </option>";
																														while ($rows= mysqli_fetch_array($run_sql)) {
																															$depertment_name= $rows['depertment_name'];

																															echo "<option > {$depertment_name}</option>";
																														} 
																														?>
																													</select>
																												</div>
																												
																												<div class="form-group">
																													<label for="id-no">Id no </label>
																													<input  id="id-no" type="text" name="student_id" class="form-control" required  >
																												</div>
																												<div class="form-group">
																													<label for="session"> Session </label>
																													<select class="form-control" id="session" name="session" >
																														<?php
																														$sql="SELECT * FROM accademic_year ";

																														$run_sql=  mysqli_query($con,$sql);
																														echo "<option > Select Session </option>";
																														while ($rows= mysqli_fetch_array($run_sql)) {
																															$session= $rows['session'];

																															echo "<option > {$session}</option>";
																														} 
																														?>
																													</select>
																												</div>				
																												<div class="form-group">
																													<label for="batch"> Batch </label>
																													<select class="form-control" id="batch" name="batch" >
																														<?php
																														$sql="SELECT * FROM accademic_year ";

																														$run_sql=  mysqli_query($con,$sql);
																														echo "<option > Select Batch </option>";
																														while ($rows= mysqli_fetch_array($run_sql)) {
																															$batch= $rows['batch'];

																															echo "<option > {$batch}</option>";
																														} 
																														?>
																													</select>
																												</div>
																												<div class="form-group">
																													<label for="date_of_birth"> Date Of Birth  </label>
																													<div class='input-group date' id='datetimepicker1'>
																														<input type="text" name="date_of_birth" id="date" class="datepicker form-control">
																														<span class="input-group-addon">
																															<span class="glyphicon glyphicon-calendar"></span>
																														</span>
																													</div>
																												</div>

																												
																												<div class="form-group">
																													<label for="address"> Address</label>
																													<input  id="address" type="text" name="address" class="form-control"  >
																												</div>
																												<div class="form-group">
																													<label for="contact"> contact</label>
																													<input  id="contact" type="text" name="contact" class="form-control"  >
																												</div>

																												



																												<div class="form-group">
																													<label for="a"> Gender </label>
																													<div>
																														<label class = "radio-inline">
																															<input type = "radio" name = "gender" id = "male" value = "male"> Male
																														</label>
																														
																														<label class = "radio-inline">
																															<input type = "radio" name = "gender" id = "female" value = "female"> Female
																														</label>
																														<label class = "radio-inline">
																															<input type = "radio" name = "gender" id = "other" value = "other"> Other
																														</label>
																													</div>
																												</div>
																												<div class="form-group">
																													<label for="a"> Hall Name </label>
																													<select class="form-control" id="hall" name="hall_name" >
																														<?php
																														$sql="SELECT * FROM hall ";

																														$run_sql=  mysqli_query($con,$sql);
																														echo "<option > Select Hall Name </option>";
																														while ($rows= mysqli_fetch_array($run_sql)) {
																															$hall_name= $rows['hall_name'];

																															echo "<option > {$hall_name}</option>";
																														} 
																														?>
																													</select>
																												</div>
																												<div class="form-group">
																													<label for="a"> Home town  </label>
																													<select class="form-control" id="hometown" name="hometown">
																														<?php
																														$sql="SELECT * FROM hometown ";

																														$run_sql=  mysqli_query($con,$sql);
																														echo "<option > Select Home-town </option>";
																														while ($rows= mysqli_fetch_array($run_sql)) {
																															$town_name= $rows['town_name'];

																															echo "<option > {$town_name}</option>";
																														} 
																														?>
																													</select>
																												</div>
																												
																												<div class="form-group">
																													<label for="submit"> </label>
																													<input  id="submit" type="submit" name="submit" class="btn btn-success">
																												</div>
																												
																												
																											</form>
										

									</div><!-- end modal-body -->
								
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
									</div><!-- end modal-footer -->
								</div><!-- end panel-body -->
							</div><!-- end panel -->
						</div><!-- end modal-content -->
					</div><!-- end modal-dialog -->
				</div><!-- end myModal -->
<footer></footer>
</body>

</html>