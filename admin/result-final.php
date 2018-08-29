<?php include 'include/condb.php';?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<script src="../js/jquery.js"></script>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		
		<script type="text/javascript">
			function getContinuousMark(student_id) {
				var xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function() {
		            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		                document.getElementById("continious").value = xmlhttp.responseText;
		            }
		        };
		        xmlhttp.open("GET", "ajax/getContinuous.php?id=" + student_id, true);
		        xmlhttp.send();
			}
			
		</script>
		 
	</head>
	<body>
		<?php include 'include/header.php';?>
		<div style="width:50px;height:60px;"></div>
		
			<?php include 'include/sidebar.php';?>
			<div class="result" align="center">

				<h2> Subject:Database Management  </h2>
				<h3>Batch:4th  </h3> <h3> Session : 2011-12 </h3>
			 </div>

		 
			<div class="col-lg-9">
				<div class="panel panel-danger">
					<div class="panel-heading"> <h4> 1st Examiner </h4> </div>
						<div class="panel-body">
							<table class="table">
								<thead>
									 
									<th>Id</th>
								 	<th>Course Code </th>
									<th>Continious</th>
									<th> 1st examiner  </th>
									<th> 2nd examiner  </th>
									<th> 3rd examiner  </th>
								</thead>
								 
								<tbody>
									 <form class="form-horizontal" action="result-final.php" method="post">
										    <td><select class="form-control" id="student_id" name="student_id" onchange="getContinuousMark(this.value)">
																	     <?php
																	     	$sql="SELECT * FROM continious_marks ";

																		         	$run_sql=  mysqli_query($con,$sql);
																		         	echo "<option selected=\"selected\"> Select Student ID</option>";

																					 while ($rows= mysqli_fetch_array($run_sql)) {
																					  	
																					  	 $student_id= $rows['student_id'];

													 	                              echo "<option > {$student_id}</option>";
																					} 
																		 ?>
																</select>
											 </td>

											<td>  <select class="form-control" id="course_code" name="course_code">
																		     <?php
																		     	$sql="SELECT * FROM continious_marks LIMIT 0,1 ";

																			         	$run_sql=  mysqli_query($con,$sql);

																						 while ($rows= mysqli_fetch_array($run_sql)) {
																						  	
																						  	 $course_code= $rows['course_code'];

														 	                              echo "<option > {$course_code}</option>";
																						} 
																			 ?>
																	</select>
											</td>
											<td> 
											<!-- <select class="form-control" id="continious" name="continious_total">
											<?php 
														$sql="SELECT * FROM continious_marks ";

											         	$run_sql=  mysqli_query($con,$sql);

														 while ($rows= mysqli_fetch_array($run_sql)) { 
														 	$total=$rows['continious_total'];
															 echo "<option> $total</option>";  
																}

											?>
									 
												</select>	 -->
					
											<input type="text" class="form-control" id="continious" disabled="disabled" name="continious_total">

											</td>
											<td><input  id="fst_examiner" type="text" name="fst_examiner_marks" class="form-control" required></td>
											<td><input  id="secnd_examiner" type="text" name="snd_examiner_marks" class="form-control" required></td>
											<td><input  id="third_examiner" type="text" name="thrd_examiner_marks" disabled="disabled" class="form-control" required></td>	
														
															
													
											<td><input  id="submit" type="submit" name="submit" value="ADD" class="btn btn-success"></td>
								 </form>
								</tbody>

								 <?php  

											if (isset($_POST['submit'])) {
												$continious_total= $_POST['continious_total'];
												$fst_examiner= $_POST['fst_examiner_marks'];
												$secnd_examiner= $_POST['snd_examiner_marks'];
												$final_marks= ceil (($fst_examiner+$secnd_examiner)/2);
												$f_total= $continious_total+$final_marks  ;
												 
												 
											$sql= "INSERT INTO final_marks (student_id, course_code, continious_total, 1st_examiner_marks,  2nd_examiner_marks, total) 

							                       VALUES ( '$_POST[student_id]',
											   				'$_POST[course_code]',
															'$_POST[continious_total]',
															'$_POST[fst_examiner_marks]',
											   				'$_POST[snd_examiner_marks]',

											   				 {$f_total}
								                           )";

												mysqli_query($con,$sql);
											}
										

										
										?> 
								
							</table>
						 </div>
				</div>
			 

					 
						 
					 

				 
						<div class="panel panel-danger">
							<div class="panel-heading"> <h4> Final Result </h4> </div>
								<div class="panel-body">
									<table class="table">
										<thead>
										    <th>Id</th>
										 	<th>Course Code </th>
											<th>Continious(50)</th>
											<th> 1st_examiner_marks(50)  </th>
											<th>2st_examiner_marks(50)</th>
											<th>Total(100)</th>
											 

										</thead>
										 
										<?php 
													$sql="SELECT * FROM final_marks ";

										         	$run_sql=  mysqli_query($con,$sql);

													 while ($rows= mysqli_fetch_array($run_sql)) { 

													 	
													 		echo'
																	<tbody>
																		<td>'.$rows['student_id'].'</td>
																		<td>'.$rows['course_code'].'  </td>
																		<td>'.$rows['continious_total'].'  </td>
																		<td>'.$rows['1st_examiner_marks'].'  </td>
																		<td>'.$rows['2nd_examiner_marks'].'  </td>
																		<td>'.$rows['total'].'  </td>
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