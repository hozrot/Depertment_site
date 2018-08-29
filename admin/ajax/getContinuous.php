<?php
include '../include/condb.php';
$id = $_GET['id'];
$sql= "SELECT continious_total FROM continious_marks WHERE student_id = '" . $id ."'";

$run_sql=  mysqli_query($con,$sql);

$rows= mysqli_fetch_array($run_sql);

echo $rows['continious_total'];