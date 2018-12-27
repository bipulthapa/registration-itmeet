<?php 
$conn = mysqli_connect("localhost","root","") or die("Error in connecting database");
mysqli_select_db($conn,"itmeet") or die("Error in selection of database");

// echo "Hello World";
?>