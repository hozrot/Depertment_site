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
			<div class="page-header"> <h1>Add Hometown   </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" action="add-hometown.php"  method="post">
			
					<div class="form-group">
						<label for="town-name"> Town-name  </label>
						<input  id="town-name" type="text" name="town_name" class="form-control" required>
					</div>
					 
					
					<div class="form-group">
						<label for=" devision"> Devision </label>
						<input  id=" devision" type="text" name="devision" class="form-control" required>
					</div>
					 
					<div class="form-group">
						<label for="counter"> Country  </label>
						<input  id="counter" type="text" name="country" class="form-control" required >
					</div>
					 
					<div class="form-group">
						<label for="submit"> </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					 
					
				</form>
		</div>
		<!-- SQL Query for inserting Starts  -->

		<?php 
			if (isset($_POST['submit'])) {
				$sql= "INSERT INTO hometown (town_name,devision,country) 
						VALUES ( '$_POST[town_name]',
								 '$_POST[devision]',
								 '$_POST[country]'
								 )";
				mysqli_query($con,$sql);

			    
			}
		 ?> 
		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Notice </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							 
							<th>Hometown </th>
							<th> Devision   </th>
							<th> Country   </th>
							
							
							 
						</thead>
						<?php 
									$sql="SELECT * FROM hometown ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['town_name'].' </td>
													<td> '.$rows['devision'].' </td>
													<td> '.$rows['country'].' </td>
											 
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