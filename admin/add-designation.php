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
			<div class="page-header"> <h1>Add Designation  </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" action="add-designation.php" method="post" >
			
					<div class="form-group">
						<label for="designation"> Designation  </label>
						<input  id="designation" name="designation_title" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="categories"> Categories  </label>
						<input  id="categories"  name="designation_categories" type="text" class="form-control" required>
					</div>
					 
					<div class="form-group">
						<label for="submit"> </label>
						<input  id="submit" type="submit"  name="submit" class="btn btn-success">
					</div>
					 
					
				</form>


		</div>

		<!-- SQL Query for inserting Starts  -->

		<?php 
			if (isset($_POST['submit'])) {
				$sql= "INSERT INTO designation (designation_title,designation_categories) 
						VALUES ( '$_POST[designation_title]',
								 '$_POST[designation_categories]'
								 )";
				mysqli_query($con,$sql);

			    
			}
		 ?> 

			<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Designation </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							 
							<th>Designation </th>
							<th>Categories </th>
							
							 
						</thead>
						<?php 
									$sql="SELECT * FROM designation ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['designation_title'].' </td>
													<td> '.$rows['designation_categories'].' </td>
													
													 
											 		<td> <input  id="submit" type="submit" value="Edit" class="btn btn-success"> </td> 
												</tbody>
											';
										}
							?> 
						 
							 
						 
					</table>
				</div>
			
			</div>
		<footer></footer>
	</body>

</html>