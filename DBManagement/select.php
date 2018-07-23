<?php
	$connect = mysqli_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysqli_select_db($connect,"db0") 
		or die("Can not select database");

	$results = mysqli_query( $connect,"SELECT * FROM student" ) 
		or die("Can not execute query");


	echo "<table border> \n";
	echo "<th>Name</th> <th>Name</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $name </td>";
		echo "<td> $age </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id&name=$name&age=$age'> Update </a> </td>";
		echo "</tr> \n";
	}
	
	echo "</table> \n";

	echo "<p><a href=insert_input.php>Insert a new record</a>";
?>