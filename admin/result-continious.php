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

			<div class="result" align="center">

				<h2> Subject : <small> Database Management </small> </h2>
				<h3>Batch:4th  </h3> <h3> Session : 2011-12 </h3>
			 </div>

		<div class="col-lg-9">
			<div class="panel panel-danger">
				<div class="panel-heading"> <h4> Continious Marks </h4> </div>
					<div class="panel-body">
						<table class="table">
							<thead>
								 
								<th>Student_Id</th>
								<th>Course_code</th>
							 	<th>Attendence(05) </th>
								<th>CT1(05)</th>
								<th> Mid Term(25)   </th>
								<th>CT2(05)</th>
								<th>Assingment  </br> presentation (10)</th>
							 
							</thead>
										<tbody>
										 		 <form class="form-horizontal" action="result-continious.php" method="post">
													<td> 
														<select class="form-control" id="student_id" name="student_id">


															     <?php
															     	$sql="SELECT * FROM students ";

																         	$run_sql=  mysqli_query($con,$sql);
																          
																			 while ($rows= mysqli_fetch_array($run_sql)) {
																			  	
																			  	 $student_id= $rows['student_id'];

											 	                              echo "<option > {$student_id}</option>";
																			} 
																 ?>
														</select>
													</td>
													<td>  
														<select class="form-control" id="course_code" name="course_code">
																     <?php
																     	$sql="SELECT * FROM courses ";
																     			 
																	         	$run_sql=  mysqli_query($con,$sql);

																				 while ($rows= mysqli_fetch_array($run_sql)) {
																				  	
																				  	 $course_code= $rows['course_code'];

												 	                              echo "<option > {$course_code}</option>";
																				} 
																	 ?>
															</select>
													</td>
													<td><input  id="attendence" type="text" name="attendence" class="form-control" required></td>
													<td><input  id="class_test_1" type="text" name="class_test_1" class="form-control" required></td>
													<td><input  id="mid" type="text" name="mid" class="form-control" required></td>
													<td><input  id="class_test_2" type="text" name="class_test_2" class="form-control" required></td>
													<td><input  id="assingment_presentation" type="text" name="assingment_presentation" class="form-control" required></td>
													<td><input  id="submit" type="submit" name="submit" value="Add"   class="btn btn-success"></td>
													 
												</form>
												</tbody>
												
										 <?php  

											if (isset($_POST['submit'])) {
												$attendence= $_POST['attendence'];
											 	$class_test_1= $_POST['class_test_1'];
											 	$mid= $_POST['mid'];
											 	$class_test_2= $_POST['class_test_2'];
											 	$assingment_presentation= $_POST['assingment_presentation'];
											 	$total= $attendence+ $assingment_presentation+ $mid+$class_test_1+ $class_test_2;
											 	 
												//echo "TOTAL " . $total;

											$sql= "INSERT INTO continious_marks (student_id, course_code, attendence, class_test_1, mid, class_test_2, assingment_presentation,continious_total) 

							                       VALUES ( '$_POST[student_id]',
											   				'$_POST[course_code]',
															'$_POST[attendence]',
															'$_POST[class_test_1]',
											   				'$_POST[mid]',
															'$_POST[class_test_2]',
															'$_POST[assingment_presentation]',
															
															{$total}
								                           )";

												mysqli_query($con,$sql);
											}
										

										
										?> 
						</table>
					 
					</div>
				</div>
		  
		 
			<div class="panel panel-danger">
				<div class="panel-heading"> <h4> Continious Result 
				<input  id="submit" type="submit" name="submit" value="publish" align="right" class="btn btn-success"> </h4> </div>
					<div class="panel-body">
						<table class="table">
							<thead>
							 	<th>Id</th>
							 	<th>Course_code</th>
							 	<th>Attendence(05) </th>
								<th>CT1(05)</th>
								<th> Mid Term(25)   </th>
								<th>CT2(05)</th>
								<th>Assingment  </br> presentation (10)</th>
								<th>Continious(50)</th>
							</thead>
								<?php 
										$sql="SELECT * FROM continious_marks ";

							         	$run_sql=  mysqli_query($con,$sql);

										 while ($rows= mysqli_fetch_array($run_sql)) { 

										  
										 		echo'
														<tbody>
															<td>'.$rows['student_id'].'</td>
															<td>'.$rows['course_code'].'  </td>
															<td>'.$rows['attendence'].'  </td>
															<td>'.$rows['class_test_1'].'  </td>
															<td>'.$rows['mid'].'  </td>
															<td>'.$rows['class_test_2'].'  </td>
															<td>'.$rows['assingment_presentation'].'  </td>
															<td>'.$rows['continious_total'].'  </td>
														</tbody>
														';
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