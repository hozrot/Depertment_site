 <!-- TopBar  -->
		<div class="top-bar " id="topbar">
			<div class="container" >
				 
				 <h6>Begum Rokeya University 
				 	<a href="#myModal" role="button" id="login" class="top-bar pull-right" data-toggle="modal" > login</a>
					<div class="modal fade" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<div class="panel panel-warning">
									<div class="panel-heading"> <h4 class="modal-panel"> Login Area  </h4> </div>
									<div class="panel-body">
								 
										<div class="modal-body">
											 <form class="form-horizontal" role="form" method="post" action="includes/login.php">
												<div class="form-group">
													<label for="username"> Username </label>
													<input  id="username" type="text" name="username" class="form-control" required>
												</div>

												<div class="form-group">
													<label for="password"> Password </label>
													<input  id="password" type="text" name="password" class="form-control" required>
												</div>
												 
												<div class="form-group">
													<label for="submit"> </label>
													<input  id="submit" type="submit" name="login" value="Login" class="btn btn-success">
												</div>
											</form>
										</div><!-- end modal-body -->
									
										<div class="modal-footer">
											<button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
										</div><!-- end modal-footer -->
									</div><!-- end panel-body -->
								</div><!-- end panel -->
							</div><!-- end modal-content -->
						</div><!-- end modal-dialog -->
					</div><!-- end myModal -->
				 </h6>

			</div>
		</div>
		 <!-- TopBar Ends   -->