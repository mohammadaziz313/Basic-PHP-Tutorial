<?php
	$id = $_GET['id'];
	$name = $_GET['name'];
	$age = $_GET['age'];	
?>

<h1>Update Record</h1>

<form method=get action=update_result.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	name: <input type=text name=name value='<?php echo $name; ?>'> <br>
	age: <input type=text name=age value='<?php echo $age; ?>'> <br>
	<p>
	<input type=submit value=Update>
</form>