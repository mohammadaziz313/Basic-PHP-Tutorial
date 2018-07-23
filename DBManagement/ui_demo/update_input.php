<?
	$id = $_GET[id];
	$f0 = $_GET[f0];
	$f1 = $_GET[f1];	
?>

<h1>Update Record</h1>

<form method=get action=update_result.php>

	<input type=hidden name=id value='<? echo $id; ?>'> <br>

	f0: <input type=text name=f0 value='<? echo $f0; ?>'> <br>
	f1: <input type=text name=f1 value='<? echo $f1; ?>'> <br>
	<p>
	<input type=submit value=Update>
</form>