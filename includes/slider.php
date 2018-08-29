
		<div class="container" >
		 	<div class="row" id="banner-content">
					<div class="col-lg-9 ">
						<ul class="bxslider">

						<?php 
						 include 'admin/include/condb.php'; 
									$sql="SELECT * FROM banner ";

						         	$run_sql=  mysqli_query($con,$sql);

									 while ($rows= mysqli_fetch_array($run_sql)) { 
									 		echo'<li><img src="images/'.$rows['banner_name'].'" height="350" width="100%" title="'.$rows['banner_title'].'"/></li>';
											}
						?>

						  <!-- <li><img src="images/slides/1.jpg" height="350" width="100%" title="CSE!!!!" /></li>
						  <li><img src="images/slides/2.jpg" height="350" width="100%" title="Code is Life" /></li>
						  <li><img src="images/slides/3.jpg" height="350" width="100%" title="Central Library" /></li>
						  <li><img src="images/slides/4.jpg" height="350" width="100%" title="Beautiful Campus" /></li> -->
						</ul>
						 
					</div>
					<div class="col-lg-3 pull-right"> 
						 <div class="list-group">
						  <a href="#" class="list-group-item-heading"><h3 class="recent"><u>Recent News</u></h3></a>

						 <?php 
									 $sql="SELECT * FROM recent_news ";
									 $run_sql=  mysqli_query($con,$sql);

									  while ($rows= mysqli_fetch_array($run_sql)) { 
										echo'
											<a href="#" class="list-group-item">'.$rows['recent_news_title'].'</a>
											';
									}
								?>
							 <!--  <a href="#" class="list-group-item-heading"><h3 class="recent"><u>Recent News</u></h3></a>
							  <a href="#" class="list-group-item">Final Exm Going On </a>
							  <a href="#" class="list-group-item">Admission Just Closed</a>
							  <a href="#" class="list-group-item">Teachers are on strike</a>
							  <a href="#" class="list-group-item">Final Exm Going On </a>
							  <a href="#" class="list-group-item">Admission Just Closed</a>
							   <a href="#" class="list-group-item">Teachers are on strike</a> 
							   <a href="#" class="list-group-item">Admission Just Closed</a>
							   <a href="#" class="list-group-item">Teachers are on strike</a>  -->
						 </div>
						 
					</div>
			</div>
					 
		</div>
