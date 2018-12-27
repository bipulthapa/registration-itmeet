<?php 
$conn = mysqli_connect("localhost","root","") or die("Error in connecting database");
mysqli_select_db($conn,"digitalconsumer") or die("Error in selection of database");

// echo "Hello World";
?>