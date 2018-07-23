<?
	$connect = mysql_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysql_select_db("db0") 
		or die("Can not select database");

	$results = mysql_query( "SELECT * FROM t0" ) 
		or die("Can not execute query");


	echo "<table border> \n";
	echo "<th>f0</th> <th>f1</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysql_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $f0 </td>";
		echo "<td> $f1 </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>";
		echo "</tr> \n";
	}
	
	echo "</table> \n";

	echo "<p><a href=insert_input.php>Insert a new record</a>";
?>