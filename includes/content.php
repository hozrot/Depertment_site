	<?php include 'admin/include/condb.php';?>
	<div class="container">
		<div class="row  " id="list">
			<div class="col-lg-3 " id="first"> 
				<div>
					<h2><u>WelCome Note:</u></h2>
					<?php 
					$sql="SELECT * FROM Welcome_note ";
					$run_sql=  mysqli_query($con,$sql);

					while ($rows= mysqli_fetch_array($run_sql)) { 
						echo'
						
						
						<center><img src="images/'.$rows['image'].'" width="200px"> </center>
						<h4>Name: '.$rows['name'].'  </h4>
						<h4>Designation: '.$rows['designation'].' </h4>
						<p class="justify">  '.$rows['words'].'  </p>
						
						';
					}
					?>
					
					
				</div>
			</div>
			<div class="col-lg-7" id="sec"> 
				
				<div class="row" >
					<div class="col-sm-12">
						<h2><u>Events and More</u></h2>
						
						
						<?php 
						
						$sql="SELECT * FROM events LIMIT 4 ";

						$run_sql=  mysqli_query($con,$sql);

						while ($rows= mysqli_fetch_array($run_sql)) { 
							
								echo' <div class="list-group">
								<div class="col-sm-3">
									<img src="images/'.$rows['event_images'].'"  height="100px" width="150px"> 
								</div> 
								<div class="col-sm-9">
									'.$rows['more'].' <a href="#" class="btn btn-info" align="right" role="button">See more...</a>
									

								</div>
							</div>
							';
						}
					?> 
					
				</div>
				
				
				
				
			</div>
		</div>
		<div class="col-lg-2" id="trd" align="right">
			<h2><u>Archaive</u></h2>
		</div>
	</div>
	
</div>

</div>