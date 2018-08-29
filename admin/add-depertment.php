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
			<div class="page-header"> <h1>Add Depertment  </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" action="add-depertment.php"  method="post">
			
					 
					<div class="form-group">
						<label for="depertment-name"> Depertment Name </label>
						<input  id="depertment-name" name="depertment_name" type="text" class="form-control" required>
					</div>
					 
					<div class="form-group">
						<label for="building"> Building  </label>
						<input  id="building" type="text" name="building" class="form-control" required >
					</div>
					<div class="form-group">
						<label for="floor"> Floor   </label>
						<input  id="floor" type="text" name="floor_no" class="form-control" required>
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
				$sql= "INSERT INTO depertment (depertment_name,building,floor_no ) 
						VALUES ( '$_POST[depertment_name]',
								 '$_POST[building]',
								 '$_POST[floor_no]'
								 )";
				mysqli_query($con,$sql);

			    
			}
		 ?> 

		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Depertment </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							 
							<th>Depertment Name </th>
							<th>Building  </th>
							<th>Floor </th>
							 
						</thead>
						<?php 
									$sql="SELECT * FROM depertment ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['depertment_name'].' </td>
													<td> '.$rows['building'].' </td>
													<td> '.$rows['floor_no'].' </td>
											 
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