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
		 
		
		<div class="col-lg-8">
			<div class="page-header"> <h1> Welcome Note </h1> </div>
		<div class="container-fluid">
				<form class="form-horizontal" method="post" enctype="multipart/form-data" action="welcome-note.php">
			
					<div class="form-group">
						<label for="name"> Name </label>
						<select class="form-control" id="name" name="name">
							     <?php
							     	$sql="SELECT * FROM teachers";

								         	$run_sql=  mysqli_query($con,$sql);
								         	echo "<option > Select Name </option>";
											 while ($rows= mysqli_fetch_array($run_sql)) {
											  
											 	$name= ''.$rows['first_name'].'&nbsp'.$rows['last_name'].'';
											 	
											 	echo "<option > {$name}</option>";
											 } 
								?>
							  </select>
					</div>

					<div class="form-group">
						<label for="image"> Picture   </label>
						<input  id="image" type="file" name="image" class="btn btn-success" required>
					</div>
					<div class="form-group">
							 <label for="designation">Designation</label>
							 <select class="form-control" id="designation" name="designation">
							     <?php
							     	$sql="SELECT * FROM designation where designation_categories= 'teacher' ";

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
						<label for="words">Words  </label>
						<textarea name="words" rows="3"></textarea>
					</div>
					 
					 
					<div class="form-group">
						<label for="submit">  </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					
					 
					
				</form>
		</div>

		<?php 
			if (isset($_POST['submit'])) {

				 
				$image= $_FILES['image']['name'];
				$image_temp = $_FILES['image']['tmp_name'];
				move_uploaded_file($image_temp, "../images/$image");

				$sql= "INSERT INTO welcome_note (name,image,designation,words) 
						VALUES ( '$_POST[name]',
								 '{$image}',
								 '$_POST[designation]',
								 '$_POST[words]'
								 )";
				mysqli_query($con,$sql);

			    
			}
		 ?> 

		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> Weloce Notes  </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<th>Name </th>
							<th>Image </th>
							<th> Designation </th>
							<th> Words </th>
							 
						</thead>
						<?php 
									$sql="SELECT * FROM welcome_note ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['name'].' </td>
													
													<td>  <img src="../images/'.$rows['image'].' " width="120px"> </td>
													<td> '.$rows['designation'].' </td> 
													<td> '.$rows['words'].' </td>
											 
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
		</div>
		<footer></footer>
	</body>

</html>