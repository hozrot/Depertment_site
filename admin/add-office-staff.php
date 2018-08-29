<?php include 'include/condb.php';?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../js/jquery.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		
		 
	</head>
	<body>
		<?php include 'include/header.php';?>
		<div style="width:50px;height:60px;"></div>
		<?php include 'include/sidebar.php';?>
		 
		
		<div class="col-lg-8">
			<div class="page-header"> <h1>Add Office Staff </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" enctype="multipart/form-data" action="add-office-staff.php" method="post">
			
					<div class="form-group">
						<label for="first-name"> First Name </label>
						<input  id="first-name" type="text" name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="last-name"> Last Name </label>
						<input  id="last-name" type="text" name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="photo"> Profile Photo </label>
						<input  id="photo" type="file" name="photo" class="btn btn-success">
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
						<label for="email"> Email </label>
						<input  id="email" type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
							 <label for="designation">Designation</label>
							 <select class="form-control" id="designation" name="designation">
							     <?php
							     	$sql="SELECT * FROM designation where designation_categories= 'Office staff' ";

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
						<label for="a"> Contact </label>
						<input  id="contact" type="text" name="contact" class="form-control">
					</div>
					<div class="form-group">
						<label for="a"> Address </label>
						<input  id="address" type="text" name="address" class="form-control">
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
						<label for="submit"> </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					 
					
				</form>
		</div>
				<?php 
							if (isset($_POST['submit'])) {

								$staff_photo= $_FILES['photo']['name'];
								$staff_photo_temp = $_FILES['photo']['tmp_name'];
								move_uploaded_file($staff_photo_temp, "../images/$staff_photo");

								$sql= "INSERT INTO office_staff (first_name, last_name, email, photo,
								                                  depertment, designation, contact, address, hometown,gender )
										VALUES ( '$_POST[first_name]',
												 '$_POST[last_name]',
												 '$_POST[email]',
												 '{$staff_photo}',
												 '$_POST[depertment]',
												 '$_POST[designation]',
												 '$_POST[contact]',
												 '$_POST[address]',
												 '$_POST[hometown]',
												 '$_POST[gender]'
												 )";
								mysqli_query($con,$sql);

							     
							}
				 ?> 

		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Office Staff </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
								 
								<th>Name  </th>
								<th>Designation</th>
								<th>Depertment</th>
								<th>Photo</th>
								<th>Hometown</th>
								<th>Gender </th>


							 
						</thead>
						<?php 
									 $sql="SELECT * FROM office_staff ";
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
														 
														<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" 
														                                               data-id="first_name" >View 

														</button>

														 
														 
															<div class="modal fade" id="myModal" role="dialog">
																<div class="modal-dialog">
																	<div class="modal-content">

																		<div class="panel panel-warning">
																			<div class="panel-heading"> <h4 class="modal-panel"> View Information 
																				 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

																			 </h4> </div>
																			<div class="panel-body">
																		 
																				<div class="modal-body">
																					

																				</div><!-- end modal-body -->
																			
																				<div class="modal-footer">
																					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
																				</div><!-- end modal-footer -->
																			</div><!-- end panel-body -->
																		</div><!-- end panel -->
																	</div><!-- end modal-content -->
																</div><!-- end modal-dialog -->
															</div><!-- end myModal -->
													</td> 
												</tbody>
											';
									}
								?>
									 
							
						 
					</table>
				</div>
		<footer></footer>
	</body>

</html>