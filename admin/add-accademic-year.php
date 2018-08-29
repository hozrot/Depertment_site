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
			<div class="page-header"> <h1>Add Accademic year   </h1> </div>
					<div class="container-fluid">

				<form class="form-horizontal" action="add-accademic-year.php" method="post">
					 
					<div class="form-group">
						<label for=" session ">  Session </label>
						<input  id=" session"  name=" session" type="text" class="form-control" required>
					</div>
					 <div class="form-group">
						<label for="batch"> Batch </label>
						<input  id="batch" name="batch" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="submit"> </label>
						<input  id="submit" type="submit" name="submit" value="Add" class="btn btn-success">
					</div>
				</form>
		</div>

		<!-- SQL Query for inserting Starts  -->

		<?php 
			if (isset($_POST['submit'])) {
				$sql= "INSERT INTO accademic_year (session,batch) 
						VALUES ( '$_POST[session]',
								 '$_POST[batch]'
								 )";
				mysqli_query($con,$sql);

			    
			}
		 ?> 
						<!-- pannel start here  -->

		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Accademic Year  </h4> </div>
				<div class="panel-body"> 
				 	<table class="table">
							<thead>
								<th>Session </th>
								<th> Batch  </th>
							</thead>

							<?php 
									$sql="SELECT * FROM accademic_year ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['session'].' </td>
													<td> '.$rows['batch'].' </td>
													<td> <input  id="submit" type="submit" value="Edit" class="btn btn-success"> </td> 
												</tbody>
											';
										}
							?> 

						</table>
		</div>

			 <!-- pannel Ends  here  -->

		<footer></footer>
	</body>

</html>