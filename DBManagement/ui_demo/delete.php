<?
	$id = $_GET[id];
	
	$connect = mysql_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysql_select_db("db0") 
		or die("Can not select database");	

	mysql_query( "DELETE FROM t0 WHERE id=$id" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=select.php>View all records</a>";
?>