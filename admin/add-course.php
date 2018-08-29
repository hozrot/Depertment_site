<?php 
require_once 'include/condb.php';
require_once 'include/Course.php';
?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../js/jquery.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		
		<script type="text/javascript">
		function createAnotherInputLink () {
			var group = document.getElementById('helpful_links');
			group.insertAdjacentHTML("beforeend", "<input  id=\"links\" type=\"text\" name=\"links[]\" class=\"form-control\">");
		}
		</script> 
	</head>
	<body>
		<?php include 'include/header.php';?>
		<div style="width:50px;height:60px;"></div>
		<?php include 'include/sidebar.php';?>
		 
		
		<div class="col-lg-8">
			<div class="page-header"> <h1>Add Courses  </h1> </div>
					<div class="container-fluid">
				<form class="form-horizontal" action="add-course.php" method="post">
			
					<div class="form-group">
							<label for="depertment"> Depertment </label>
							 <select class="form-control" id="depertment" name="depertment" >
							     <?php
							     	$sql="SELECT * FROM depertment ";

								         	$run_sql=  mysqli_query($con,$sql);
								         	echo "<option > Select Depertment </option>";
											 while ($rows= mysqli_fetch_array($run_sql)) {
											 	$depertment_name= $rows['depertment_name'];

											 	echo "<option > {$depertment_name}</option>";
											 } 
								?>
							  </select>
						</div>
					<div class="form-group">
						<label for="course-name"> Course Name </label>
						<input  id="course-name" type="text" name="course_title" class="form-control" required>
					</div>
					 
					
					<div class="form-group">
						<label for="course-code"> Course Code </label>
						<input  id="course-code" type="text" name="course_code" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="credit">Credit On Course</label>
						<input  id="credit" type="text" name="credits" class="form-control" required>
					</div>
					 
					<div class="form-group">
						<label for="books"> Books  </label>
						<input  id="books" type="text" name="books" class="form-control" required>
					</div>
					<div class="form-group" >
						<label for="links"> Helpful Links  </label>
						<div id="helpful_links">
							<input  id="links" type="text" name="links[]" class="form-control" required>
						</div>	
						<a class="btn btn-primary" onclick="createAnotherInputLink()">+</a>
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

				$links = $_POST['links'];
				$link_with_comma = "";
				foreach ($links as $link) {
					if(!empty($link)) {
						$link_with_comma .= $link . ",";
					}
				}

				$sql= "INSERT INTO courses (course_code,course_title,depertment,credits,books,links) 
						VALUES ( '$_POST[course_code]',
								 '$_POST[course_title]',
								 
								 '$_POST[depertment]',
								 '$_POST[credits]',
								 '$_POST[books]',
								 '$link_with_comma'
								 )";
				mysqli_query($con,$sql);

			     
			}
		 ?> 

		<div class="panel panel-danger">
				<div class="panel-heading"> <h4> List Of Courses </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							 
							<th>Depertment</th>
							<th>Course Title  </th>
							<th>Course Code </th>
							<th>Credits </th>
							<th>Books </th>
							<th>Links  </th>
							 
						</thead>
						<?php 
						$courses = Course::get_all_courses();
						foreach ($courses as $course) {
							echo'
								<tbody>
									<td>'.$course->depertment .'</td>
									<td>'.$course->course_title.' </td>
									<td>'.$course->course_code.'  </td>
									<td>'.$course->credits.' </td>
									<td>'.$course->books.' </td>
									<td>';
									 $token = strtok($course->links, ",");
									 while($token != false) {
									 	echo "<a href=\"{$token}\" target=\"_blank\">{$token}</a><br />";
									 	//$token = strtok($token, ","); // memory overflow
									 	$token = strtok(",");
									 }

							echo '  </td>
									 
									<td> 
									 
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" 
									                                               data-id="first_name" >View 

									</button>
									</td> 
								</tbody>
								';
						}
						?>
					</table>
				</div>
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
		<footer></footer>
	</body>

</html>