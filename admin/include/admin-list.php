 
				
				<div class="col-lg-7">
					<div class="panel panel-warning">
						<div class="panel-heading"> <h4>Admin Lists</h4> </div>
						<div class="panel-body">
							<table class="table">
								<thead>
									<th>Id </th>
									<th>Name </th>
									<th>email </th>
								</thead>
									<tbody>

								<?php 
									$sql="SELECT * FROM user   ";

						         	$run_sql=  mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									   echo' 
												<tbody>
												<td> '.$rows['user_id'].' </td>
													<td> '.$rows['username'].' </td>
													<td> '.$rows['email'].' </td>
												</tbody>
											 
									     	';
									}
								?>
									</tbody>
							
							</table>
						
						</div>
					</div>
							 
						 
				</div>
				 