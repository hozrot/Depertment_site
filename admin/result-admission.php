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


		<div class="col-lg-9">
			<div class="panel panel-danger">
			<div class="panel-heading"> <h4> Admission Result </h4> </div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Roll</th>
						 	<th> Name </th>
							<th> Unit  </th>
							<th> Position   </th>
							<th> Marks   </th>
						</thead>
						<tbody>
							<td> 1</td>
							<td> 25658</td>
							<td>  kalam </td>
							<td> <select class="form-control" id="sel1">
								    <option>A</option>
								    <option>B</option>
								    <option>C</option>
								    <option>D</option>
								    <option>E</option>
								    <option>F</option>
								  </select> </td>
							
							<td>  <input  id="roll" type="text" name="roll" class="form-control" required></td>
							<td>  <input  id="roll" type="text" name="roll" class="form-control" required></td>
							 
						</tbody>
							 
						 
					</table>
				</div>
		</div>
		 
			
		</div>

		
		
		 
		<footer>
		</footer>
	</body>

</html>