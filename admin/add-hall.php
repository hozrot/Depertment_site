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
			<div class="page-header"> <h1>Add Hall  </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" method="post" enctype="multipart/form-data" action="add-hall.php">
			
					 
					<div class="form-group">
						<label for="hall-name"> Hall-name  </label>
						<input  id="hall-name" type="text" name="hall_name" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="image"> Picture of Hall </label>
						<input  id="image" type="file" name="image" class="btn btn-success" required>
					</div>
					 
					<div class="form-group">
						<label for="submit"> </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					 
					
				</form>
		</div>

		<?php 
			 

			if (isset($_POST['submit'])) {

					$hall_name= $_POST['hall_name'];
					$hall_image= $_FILES['image']['name'];
					$hall_image_temp = $_FILES['image']['tmp_name'];

					move_uploaded_file($hall_image_temp, "../images/$hall_image");



					$sql= "INSERT INTO hall (hall_name,	hall_image) 
							VALUES ( '{$hall_name}',
								     '{$hall_image}'
								   )";

					mysqli_query($con,$sql);
				}
 		?> 
		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Hall </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							 
							<th>Hall Name  </th>
							<th>Picturee </th>
							 
						</thead>
						<?php 
									$sql="SELECT * FROM hall ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['hall_name'].' </td>
													<td>  <img src="../images/'.$rows['hall_image'].' " width="120px"> </td>

													 
											 
													<td> <input  id="submit" type="submit" value="Edit" class="btn btn-success"> </td> 
												</tbody>
											';
										}
							?> 
					</table>
				</div>
		<footer></footer>
	</body>

</html>

