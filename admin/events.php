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
			<div class="page-header"> <h1> Add Events  </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" method="post" enctype="multipart/form-data" action="events.php">
			
					<div class="form-group">
						<label for="title"> Title </label>
						<input  id="title" type="text" name="event_title" class="form-control">
					</div>
					<div class="form-group">
						<label for="banner"> Add a banner </label>
						<input  id="banner" type="file" name="banner" class="btn btn-success"> 
					</div>
					<div class="form-group">
						<label for="ocation">Ocation</label>
						<input  id="ocation" type="text" name="occasion" class="form-control">
					</div>
					 
					<div class="form-group">
						<label for="schedule"> Schedule  </label>
						<input  id="schedule" type="text" name="schedule" class="form-control">
					</div>
					<div class="form-group">
						<label for="more">More </label>
						<textarea rows="3" name="more"> </textarea>
						 
					</div>
					<div class="form-group">
						<label for="submit">  </label>
						<input  id="submit" type="submit" name="submit" class="btn btn-success">
					</div>
					
					<div class="form-group">
						 
						<INPUT Type="BUTTON" class="btn btn-success" Value="Registration" Onclick="window.location.href='registration.php'"> 
					</div>
					
				</form>
		</div>

		<?php 
			if (isset($_POST['submit'])) {
				$banner= $_FILES['banner']['name'];
				$banner_temp = $_FILES['banner']['tmp_name'];
				move_uploaded_file($banner_temp, "../images/$banner");

				$sql= "INSERT INTO events (event_title,event_images,occasion,schedule,more) 
						VALUES ( '$_POST[event_title]',
								 '{$banner}',
								 '$_POST[occasion]',
								 '$_POST[schedule]',
								  '$_POST[more]'
								 )";
				mysqli_query($con,$sql);

			    
			}
		 ?> 

		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Events </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<th>Title </th>
							<th>Image </th>
							<th>Occation </th>
							<th> Schedule </th>
							<th> more</th>
							 
						</thead>
						<?php 
									$sql="SELECT * FROM events ";

						         	$run_sql= mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo' 
										 		 <tbody>
													<td> '.$rows['event_title'].' </td>
													<td>  <img src="../images/'.$rows['event_images'].'" width="120px"> </td>
													<td> '.$rows['occasion'].' </td>
													<td> '.$rows['schedule'].' </td>
													<td> '.$rows['more'].' </td>
											 
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