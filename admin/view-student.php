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
	<div class="panel-heading"> <h4> List Of Students   </h4> </div>
	<div class="panel-body">
		<table class="table table-hover ">
			<thead>
				
				<th>Name  </th>
				<th>Photo  </th>
				
				<th>Depertment</th>
				
				<th>Session</th>
				<th>Batch </th>
				<th>Id no. </th>


				
			</thead>
			<?php 
			$sql="SELECT * FROM students ";

			$run_sql=  mysqli_query($con,$sql);

			while ($rows= mysqli_fetch_array($run_sql)) { 
				echo'
				<tbody>
					<td>'.$rows['first_name'].'	'.$rows['last_name'].'</td>
					<td>  <img src="../images/'.$rows['photo'].'" width="120px"> </td>
					<td>'.$rows['depertment'].'  </td>
					<td>'.$rows['session'].'  </td>
					<td>'.$rows['batch'].'  </td>
					<td>'.$rows['student_id'].'  </td>
					<td> <input  id="submit" type="submit" value="Edit" class="btn btn-success"> </td> 
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