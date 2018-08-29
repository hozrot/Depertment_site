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
				<div class="panel-heading"> <h4 align="center"> Computer Science And Engineering  </h4> </div>
					<div class="panel-body">
						<table class="table">
						<thead>
							 
							<th> Session  </th>
							<th> Level  </th>
							 
						</thead>
						<tbody>
							 <form class="form-horizontal" enctype="multipart/form-data" action="result.php" method="post">
									<td> <select class="form-control" id="session" name="session" required>

									<?php
										$sql="SELECT * FROM accademic_year ";

										$run_sql=  mysqli_query($con,$sql);
										 	echo "<option > Select Session </option>";
											while ($rows= mysqli_fetch_array($run_sql)) {
												 echo '
												 <option>'.$rows['session'].'</option>

												 ';
											} 
									?>
										   
										     
										  </select> 
									</td>
									<td> 
										<select class="form-control" id="level" name="level" required>

									<?php
										$sql="SELECT * FROM courses ";

										$run_sql=  mysqli_query($con,$sql);
										 	echo "<option > Select level </option>";
											while ($rows= mysqli_fetch_array($run_sql)) {
												 echo '
												 <option>'.$rows['level'].'</option>

												 ';
											} 
									?>
										   
										     
										  </select> 

								    </td>
								 
									 
									<td><input  id="submit" type="submit" name="submit" value="GO..." class="btn btn-success"></td>
								 
										 
							 </form>
						</tbody>
							<?php  

								if (isset($_POST['submit'])) {
									$session= $_POST['session'];
								    $level= $_POST['level'];

									$sql="SELECT * FROM courses WHERE session=$session ";

									$run_sql=  mysqli_query($con,$sql);
									mysqli_query($con,$sql);
								}
							?> 							 
						 
					</table>
					 
							
					 
					</div>
			</div>

			<div class="panel panel-danger">
				<div class="panel-heading"> <h4 align="center"> All Courses in Level   </h4> </div>
					<div class="panel-body">
						<table class="table">
						<thead>
							 
							<th>Course Code </th>
							<th>Course Title </th>
							 
							 
						</thead>
						 <?php 
						 if (isset($_POST['submit'])) {
										$sql="SELECT * FROM courses ";

							         	$run_sql=  mysqli_query($con,$sql);

										 while ($rows= mysqli_fetch_array($run_sql)) { 

										  
										 		echo'
														<tbody>
															 
															<td>'.$rows['course_code'].'  </td>
															<td>'.$rows['course_title'].'  </td>
															 
														</tbody>
														';
												}
						}
							?>
						 
					</table>
					 
							
					 
					</div>
			</div>
		 
			
		</div>

		
		
		 
		<footer>
		</footer>
	</body>

</html>