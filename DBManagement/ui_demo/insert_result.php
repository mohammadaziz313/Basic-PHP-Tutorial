<?
	$f0 = $_GET[f0];
	$f1 = $_GET[f1];
	
	$connect = mysql_connect("localhost", "root", "" ) 
		or die("Can not connect");

	mysql_select_db("db0") 
		or die("Can not select database");	

	mysql_query( "INSERT INTO t0 VALUES ( '', '$f0', '$f1' )" )
		or die("Can not execute query");

	echo "Record inserted:<br> f0 = $f0 <br> f1 = $f1";

	echo "<p><a href=select.php>View all records</a>";
?>