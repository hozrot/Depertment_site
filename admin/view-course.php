<?php include 'include/condb.php';?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../js/jquery.js"></script>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		
		 
	</head>
	<body>
		<?php include 'include/header.php';?>
		<div style="width:50px;height:60px;"></div>
		<?php include 'include/sidebar.php';?>


		<div class="col-lg-10">
			

			<div class="panel panel-danger">
				<div class="panel-heading"> <h4 align="center"> All Courses  </h4> </div>
					<div class="panel-body" align="center">
					 <button class="btn btn-primary" data-toggle="collapse" data-target="#1-1">Level 1-1</button>

						<div id="1-1" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																	 <td> <div class="btn-group btn-groupsmalld">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div>
																	</td>
																</tbody>
																';
														}
								 
									?>
								 
							</table>
						</div>

						<button class="btn btn-primary" data-toggle="collapse" data-target="#1-2">Level 1-2 </button>

						<div id="1-2" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses  WHERE level ='2-2' ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																	 <td> <div class="btn-group btn-group-small">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div> 
																	</td>
																</tbody>
																';
														}
							 
									?>
								 
							</table>
						</div>

						 <button class="btn btn-primary" data-toggle="collapse" data-target="#2-1">Level 2-1 </button>

						<div id="2-1" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses  WHERE level ='2-1' ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																																		 <td>  <div class="btn-group btn-grousmalled">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div
																	></td>
																</tbody>
																';
												 
								}
									?>
								 
							</table>
						</div>

						<button class="btn btn-primary" data-toggle="collapse" data-target="#2-2">Level  2-2 </button>

						<div id="2-2" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses WHERE level ='2-2' ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																	 <td> <div class="btn-group btn-group-small">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div> 
																	</td>
																</tbody>
																';
														}
								 
									?>
								 
							</table>
						</div>
						<button class="btn btn-primary" data-toggle="collapse" data-target="#3-1">Level 3-1 </button>

						<div id="3-1" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																																		 <td>  <div class="btn-group btn-grousmalled">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div
																	></td>
																</tbody>
																';
														}
								 
									?>
								 
							</table>
						</div>

						<button class="btn btn-primary" data-toggle="collapse" data-target="#3-2">Level 3 -2 </button>

						<div id="3-2" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																																		 <td>  <div class="btn-group btn-grousmalled">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div
																	></td>
																</tbody>
																';
														}
							 
									?>
								 
							</table>
						</div>
						<button class="btn btn-primary" data-toggle="collapse" data-target="#4-1">Level 4-1 </button>

						<div id="4-1" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																	 <td> <div class="btn-group btn-groupsmalld">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div>
																	</td>
																</tbody>
																';
														}
						 
									?>
								 
							</table>
						</div>
						<button class="btn btn-primary" data-toggle="collapse" data-target="#4-2">Level 4-2</button>

						<div id="4-2" class="collapse">
							<table class="table">
								<thead>
									 
									<th>Course Code </th>
									<th>Course Title </th>
									 
									 
								</thead>
								 <?php 
								 
												$sql="SELECT * FROM courses ";

									         	$run_sql=  mysqli_query($con,$sql);

												 while ($rows= mysqli_fetch_array($run_sql)) { 

												  
												 		echo'
																<tbody>
																	 
																	<td>'.$rows['course_code'].'  </td>
																	<td>'.$rows['course_title'].'  </td>
																	 <td> <div class="btn-group btn-groupsmalld">
																	  		<a href="result-continious.php" class="btn btn-primary">Continious</a>
																	  		<a href="result-final.php" class="btn btn-primary">Final</a>
																		  </div>
																	</td>
																</tbody>
																';
														}
							 
									?>
								 
							</table>
						</div>
					 

						
							
					 
					</div>
			</div>
		 
			
		</div>

		
		
		 
		<footer>
		</footer>
	</body>

</html>