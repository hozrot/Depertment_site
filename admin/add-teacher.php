<?php 
require_once 'include/condb.php';
?>

<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../js/jquery.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		
		 

		<script type="text/javascript">
		function showData(data) {
			//console.log((data));

			$('#modal_first_name').val(data['first_name']);
			$('#modal_last_name').val(data['last_name']);
			$('#modal_email').val(data['email']);
			$('#modal_designation').val(data['designation']);
			$('#modal_photo').val(data['photo']);
			$('#modal_depertment').val(data['depertment']);
			$('#modal_edu_back').val(data['edu_back']);
			$('#modal_experience').val(data['experience']);
			$('#modal_address').val(data['address']);
			$('#modal_hometown').val(data['hometown']);
			$('#modal_gender').val(data['gender']);
			$('#modal_contact').val(data['contact']);


			

			

		}
		$(document).ready(function(){
			$('.view_teacher').click(function() {
				$.getJSON('test.php', { id : $(this).attr('id')}, showData);
			});
		});
		</script>
		 
	</head>
	<body>
		<?php include 'include/header.php';?>
		<div style="width:50px;height:60px;"></div>
		<?php include 'include/sidebar.php';?>
		 
		
		<div class="col-lg-8">
			<div class="page-header"> <h1>Add Teacher</h1> </div>
				<div class="container-fluid">
					<form class="form-horizontal" enctype="multipart/form-data" action="add-teacher.php" method="post">
						<div class="form-group">
							<label for="first-name"> First Name </label>
							<input  id="first-name" type="text" name="first_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="last-name"> Last Name </label>
							<input  id="last-name" type="text" name="last_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="photo"> Profile Photo </label>
							<input  id="photo" type="file" name="photo" class="btn btn-success">
						</div>
							<div class="form-group">
							<label for="email"> Email </label>
							<input  id="email" type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							 <label for="designation">Designation</label>
							 <select class="form-control" id="designation" name="designation">
							     <?php
							     	$sql="SELECT * FROM designation where designation_categories= 'teacher' ";

								         	$run_sql=  mysqli_query($con,$sql);
								         	echo "<option > Select Designation </option>";
											 while ($rows= mysqli_fetch_array($run_sql)) {
											 	$designation_title= $rows['designation_title'];
											 	
											 	echo "<option > {$designation_title}</option>";
											 } 
								?>
							  </select>
						</div>
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
							<label for="edu-back">Educational Background</label>
							<input  id="edu-back" type="text" name="edu_back" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="experience"> Experience </label>
							<input  id="experience" type="text" name="experience" class="form-control"  >
						</div>
						<div class="form-group">
							<label for="address"> Address </label>
							<textarea  class="form-control" name="address"> </textarea>
	 						 
						</div>
						<div class="form-group">
							<label for="hometown"> Hometown  </label>
							 <select class="form-control" id="hometown" name="hometown">
							     <?php
							     	$sql="SELECT * FROM hometown ";

								         	$run_sql=  mysqli_query($con,$sql);
								         	echo "<option > Select Hometown </option>";
											 while ($rows= mysqli_fetch_array($run_sql)) {
											 	$town_name= $rows['town_name'];
											 	
											 	echo "<option > {$town_name}</option>";
											 } 
								 ?>
							 </select>

	 						 
						</div>
						<div class="form-group">
							 <label for = "gender">Gender</label>
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
							<label for="contact"> Contact </label>
							<input  id="contact" type="text" name="contact" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label for="submit"> </label>
							<input  id="submit" type="submit" name="submit" class="btn btn-success">
						</div>
						 
						
					</form>
		 		</div>


				<?php 
					if (isset($_POST['submit'])) {

						$teacher_photo= $_FILES['photo']['name'];
						$teacher_photo_temp = $_FILES['photo']['tmp_name'];
						move_uploaded_file($teacher_photo_temp, "../images/$teacher_photo");

						$sql= "INSERT INTO teachers (first_name,last_name,email,photo,depertment,designation,
											edu_back,experience,address,hometown,contact,gender) 
								VALUES ( '$_POST[first_name]',
										 '$_POST[last_name]',
										 '$_POST[email]',
										 '{$teacher_photo}',
										 '$_POST[depertment]',
										 '$_POST[designation]',
										 '$_POST[edu_back]',
										 '$_POST[experience]',
										 '$_POST[address]',
										  '$_POST[hometown]',
										 '$_POST[contact]',
										 '$_POST[gender]'
										 )";
						mysqli_query($con,$sql);

					     
					}
				 ?> 

				<div class="panel panel-danger panel-responsive">
						<div class="panel-heading"> <h4> List Of Teachers  </h4> </div>
						<div class="panel-body">
							<table class="table table-hover ">
								<thead>
									    <th>Name  </th>
									    <th>Designation</th>
										<th>Depertment</th>
										<th>Photo</th>
										<th>hometown </th>    
										<th>Gender </th>
								</thead>
								<?php 
									 $sql="SELECT * FROM teachers ";
									 $run_sql=  mysqli_query($con,$sql);

									  while ($rows= mysqli_fetch_array($run_sql)) { 
										echo'
												<tbody>
													<td>'.$rows['first_name'].' '.$rows['last_name'].'</td>
																			 
													<td>'.$rows['designation'].'  </td>
													<td>'.$rows['depertment'].'  </td>
													<td>  <img src="../images/'.$rows['photo'].'" width="120px"> </td>
																			 
													<td>'.$rows['hometown'].'  </td>
													<td>'.$rows['gender'].'  </td>
																			 
													<td> 
														 
														<button type="button" class="btn btn-info view_teacher" id="' . $rows['teacher_id'] . '" data-toggle="modal" data-target="#myModal" 
														 >View</button>

															
													</td> 
												</tbody>
											';
									}
								?>
									 
								 
							</table>
						</div>
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
							 <form class="form-horizontal" enctype="multipart/form-data" action="add-teacher.php" method="post">
									<input type="hidden" name="id" value="<?php echo "$rows[teacher_id]";?> ">
								<div class="form-group">
									<label for="first-name"> First Name </label>
									<input  id="modal_first_name" type="text" name="first_name" class="form-control">
								</div>
								<div class="form-group">
									<label for="last-name"> Last Name </label>
									<input  id="modal_last_name" type="text" name="last_name" class="form-control">
								</div>
								 
								<div class="form-group">
									<label for="email"> Email </label>
									<input  id="modal_email" type="text" name="email" class="form-control">
								</div>
								<div class="form-group">
									 <label for="designation">Designation</label>
									 <select class="form-control" id="modal_designation" name="designation">
									     <?php
									     	$sql="SELECT * FROM designation where designation_categories= 'teacher' ";

										         	$run_sql=  mysqli_query($con,$sql);
										         	echo "<option > Select Designation </option>";
													 while ($rows= mysqli_fetch_array($run_sql)) {
													 	$designation_title= $rows['designation_title'];
													 	
													 	echo "<option > {$designation_title}</option>";
													 } 
										?>
									  </select>
								</div> 
								<div class="form-group">
									<label for="depertment"> Depertment </label>
									 <select class="form-control" id="modal_depertment" name="depertment" >
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
							<label for="edu-back">Educational Background</label>
							<input  id="modal_edu_back" type="text" name="edu_back" class="form-control">
						</div>
						<div class="form-group">
							<label for="experience"> Experience </label>
							<input  id="modal_experience" type="text" name="experience" class="form-control"  >
						</div>
						<div class="form-group">
							<label for="address"> Address </label>
							<textarea  class="form-control" id="modal_address" name="address"> </textarea>
	 						 
						</div>
						<div class="form-group">
							<label for="hometown"> Hometown  </label>
							 <select class="form-control" id="modal_hometown" name="hometown">
							     <?php
							     	$sql="SELECT * FROM hometown ";

								         	$run_sql=  mysqli_query($con,$sql);
								         	echo "<option > Select Hometown </option>";
											 while ($rows= mysqli_fetch_array($run_sql)) {
											 	$town_name= $rows['town_name'];
											 	
											 	echo "<option > {$town_name}</option>";
											 } 
								 ?>
							 </select>

	 						 
						</div>
						<div class="form-group">
							 <label for = "gender">Gender</label>
							 <div>
								<label class = "radio-inline" id="modal_gender">
									  <input type = "radio" name = "gender" id = "modal_male" value = "male"> Male
								</label>
									   
								<label class = "radio-inline">
									  <input type = "radio" name = "gender" id = "modal_female" value = "female"> Female
								</label>
								<label class = "radio-inline">
									  <input type = "radio" name = "gender" id = "modal_other" value = "other"> Other
								</label>
							 </div>
	 						 
						</div>
						<div class="form-group">
							<label for="contact"> Contact </label>
							<input  id="modal_contact" type="text" name="contact" class="form-control"  >
						</div>
						 
						
						
						<div class="form-group">
							<label for="submit"> </label>
							<input  id="modal_submit" type="submit" name="modal_submit" value="Update" class="btn btn-success">
						</div>
					</form>

					<?php
					   $id = $_GET['id'];
						if (isset($_POST['modal_submit'])) {
							$sql= "UPDATE teachers
									SET first_name='$_POST[first_name]',
										last_name='$_POST[last_name]',
										email='$_POST[email]',
										depertment='$_POST[depertment]',
										designation='$_POST[designation]',
										edu_back='$_POST[edu_back]',
										experience='$_POST[experience]',
										address='$_POST[address]',
										hometown='$_POST[hometown]',
										 
										contact='$_POST[contact]'
										
									WHERE teacher_id ='" . $id ."';
								  "; 
							mysqli_query($con,$sql);
							if (mysqli_query($con, $sql)) {
							    echo "Record updated successfully";
								} else {
								    echo "Error updating record: " . mysqli_error($con);
}
						}

					?>   

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