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
			<div class="page-header"> <h1>Add Banner   </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" method="post" enctype="multipart/form-data" action="add-banner.php">
			
					 
					 

					<div class="form-group">
						<label for="banner"> Select Picture to uplode..</label>
						<input  id="banner" type="file" name="banner" class="btn btn-success" required>
					</div>

					<div class="form-group">
						<label for="title"> Title</label>
						<input  id="title" type="text" name="title" class="form-control"  required>
					</div>
					 
					<div class="form-group">
						<label for="submit"> </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					 
					
				</form>
		</div>

		<?php 
			 

			if (isset($_POST['submit'])) {

					 
					$banner_image= $_FILES['banner']['name'];
					$banner_image_temp = $_FILES['banner']['tmp_name'];

					move_uploaded_file($banner_image_temp, "../images/$banner_image");



					$sql= "INSERT INTO banner (banner_name,banner_title) 
							VALUES ( '{$banner_image}',
									'$_POST[title]'
								   )";

					mysqli_query($con,$sql);
				}
 		?> 
		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Banner</h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							 
							 
							<th>Picturee </th>
							<th>Title </th>

							 
						</thead>
						<?php 
									$sql="SELECT * FROM banner ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													 
													<td>  <img src="../images/'.$rows['banner_name'].' " width="120px"> </td>
													<td>'.$rows['banner_title'].'</td>

													 
											 
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

