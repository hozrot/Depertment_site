<?php 
	session_start();
	include 'include/condb.php';






?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../includes/js/jquery.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		
		 
	</head>
	<body>
		<?php include 'include/header.php';?>
		<div style="width:50px;height:60px;"></div>
		<?php include 'include/sidebar.php';?>
		
			
		 <!-- Panels  starts -->

			<div class="col-lg-9">
			<?php echo $_SESSION['username']; ?>
			<div style="width:50px;height:50px;"></div>
				<div class="col-md-3">

				<?php

					$sql= "SELECT * FROM students";
					$run_sql= mysqli_query($con,$sql);
					$total_students= mysqli_num_rows($run_sql); 
				?>
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3"><i class="glyphicon glyphicon-pencil" style="font-size:4.5em"></i> </div>
								<div class="col-xs-9 text-right">
									<div style="font-size:2.5em"> <?php echo "$total_students";  ?> </div>
									<div > Students </div>
									
								</div>
							</div>
						</div>
						<a href="view-student.php">
						<div class="panel-footer">
							<div class="pull-left"> View Students</div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
							<div class="clearfix"></div>
						
						</div>
						
						</a>
					</div>
				</div>
				 <!-- Singel  Panels  Ends  -->
				<div class="col-md-3">
				<?php

					$sql= "SELECT * FROM teachers";
					$run_sql= mysqli_query($con,$sql);
					$total_teachers= mysqli_num_rows($run_sql); 
				?>
					<div class="panel panel-warning">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3"><i class="glyphicon glyphicon-user" style="font-size:4.5em"></i> </div>
								<div class="col-xs-9 text-right">
									<div style="font-size:2.5em"> <?php echo "$total_teachers";  ?> </div>
									<div > Teachers </div>
									
								</div>
							</div>
						</div>
						<a href="view-teacher.php">
						<div class="panel-footer">
							<div class="pull-left"> View Teachers </div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
							<div class="clearfix"></div>
						
						</div>
						
						</a>
					</div>
				</div>
				<!--  Singel  Panels  Ends  --> 
				<div class="col-md-3">

				<?php

					$sql= "SELECT * FROM office_staff";
					$run_sql= mysqli_query($con,$sql);
					$total_office_staff= mysqli_num_rows($run_sql); 
				?>

					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3"><i class="glyphicon glyphicon-paperclip" style="font-size:4.5em"></i> </div>
								<div class="col-xs-9 text-right">
									<div style="font-size:2.5em"> <?php echo "$total_office_staff";  ?> </div>
									<div > Office Staff </div>
									
								</div>
							</div>
						</div>
						<a href="view-office-staff.php">
						<div class="panel-footer">
							<div class="pull-left"> View Office Staff  </div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
							<div class="clearfix"></div>
						
						</div>
						
						</a>
					</div>
				</div>	
					<!--  Singel  Panels  Ends  -->
					<div class="col-md-3">
						<?php

							$sql= "SELECT * FROM courses";
							$run_sql= mysqli_query($con,$sql);
							$total_courses= mysqli_num_rows($run_sql); 
						?>
					<div class="panel panel-danger">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3"><i class="glyphicon glyphicon-pushpin" style="font-size:4.5em"></i> </div>
								<div class="col-xs-9 text-right">
									<div style="font-size:2.5em"> <?php echo "$total_courses";  ?> </div>
									<div > Course </div>
									
								</div>
							</div>
						</div>
						<a href="view-course.php">
						<div class="panel-footer">
							<div class="pull-left"> View Course  </div>
							<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
							<div class="clearfix"></div>
						
						</div>
						
						</a>
					</div>
				
				</div>
				<div class="clearfix"></div>
			<!--  Panels  Ends  -->
				
				<?php include 'include/admin-list.php';?>

				
				
		<!-- Profile  Panel Starts    -->
				
				<div class="col-lg-5">
					
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="col-md-8">
							<?php 
										$sql="SELECT * FROM students LIMIT 0,1 ";

							         	$run_sql=  mysqli_query($con,$sql);

										 while ($rows= mysqli_fetch_array($run_sql)) { 
										echo' 
													<div class="page-header"> <h4>'.$rows['first_name'].' '.$rows['last_name'].'</h4> 
																

													</div>
													 
													 
														
												 
													<div class="panel-body">

								
													<table class="table table-condensed"> 
														<tbody>
															 <tr>
																<th>Email:</th>
																<td> '.$rows['email'].' </td>
																</tr>
															  <tr>
																<th>Session:</th>
																<td> '.$rows['session'].' </td>
																</tr>
															  <tr>
																<th>Depertment: </th>
																<td> '.$rows['depertment'].' </td>
																</tr>
															 <tr>
																<th>Hometown: </th>
																<td> '.$rows['hometown'].' </td>
																</tr>
														</tbody>
													</table>
													</div>
											';
									}
							?>
								
								</div>
						</div>
					</div>
							 
						 
				</div>
				
				
				<div class="clearfix"></div>
			<!--  Profile  Panel Ends   --> 
				
				
				<?php include 'include/running-course.php';?>
			
			
				
			</div>
			
			
			 
			
		<footer></footer>
		
	</body>
	
</html>