<?php
	$name = $_GET['name'];
	$age = $_GET['age'];
	
	$connect = mysqli_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysqli_select_db($connect,"db0") 
		or die("Can not select database");	

	mysqli_query( $connect,"INSERT INTO student VALUES ( '', '$name', '$age' )" )
		or die("Can not execute query");

	echo "Record inserted:<br> Name = $name <br> Age = $age";

	echo "<p><a href=select.php>View all records</a>";
?>