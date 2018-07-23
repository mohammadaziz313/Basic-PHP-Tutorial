<?php
	$id = $_GET['id'];
	
	$connect = mysqli_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysqli_select_db($connect,"db0") 
		or die("Can not select database");	

	mysqli_query( $connect,"DELETE FROM student WHERE id=$id" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=select.php>View all records</a>";
?>