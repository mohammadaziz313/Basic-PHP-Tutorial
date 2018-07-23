<?php
	$id = $_GET['id'];
	$name = $_GET['name'];
	$age = $_GET['age'];

	
	$connect = mysqli_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysqli_select_db($connect,"db0") 
		or die("Can not select database");
	
	$query 	= "UPDATE student SET name='$name', age='$age' WHERE id = $id";
	echo $query;

	mysqli_query( $connect,$query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> name = $name <br> age = $age";

	echo "<p><a href=select.php>View all records</a>";
?>