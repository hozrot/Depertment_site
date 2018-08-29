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

		 <div class="panel panel-danger panel-responsive">
						<div class="panel-heading"> <h4> List Of Teachers  </h4> </div>
						<div class="panel-body">
							<table class="table table-hover ">
								<thead>
									    <th>Name  </th>
									    <th>Designation</th>
										<th>Depertment</th>
										<th>Photo</th>
										<th>hometown </th>    
										<th>Gender </th>
								</thead>
								<?php 
									 $sql="SELECT * FROM teachers ";
									 $run_sql=  mysqli_query($con,$sql);

									  while ($rows= mysqli_fetch_array($run_sql)) { 
										echo'
												<tbody>
													<td>'.$rows['first_name'].' '.$rows['last_name'].'</td>
																			 
													<td>'.$rows['designation'].'  </td>
													<td>'.$rows['depertment'].'  </td>
													<td>  <img src="../images/'.$rows['photo'].'" width="120px"> </td>
																			 
													<td>'.$rows['hometown'].'  </td>
													<td>'.$rows['gender'].'  </td>
																			 
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
		</div>
		<footer></footer>
	</body>

</html>