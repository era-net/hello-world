<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="add.css">

	<title>ADD</title>
</head>
<body>
<a href="main.php"><-- MAIN</a>
<?php
	$d = file_get_contents("data/data.txt");

	$data = unserialize($d);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$add_fn = strip_tags($_POST['firstname']);
		$add_ln = strip_tags($_POST['lastname']);
		$add_str = strip_tags($_POST['street']);
		$add_cty = strip_tags($_POST['city']);
		if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['street']) && !empty($_POST['city'])) {

			array_push($data, array ("fname" => "$add_fn", "lname" => "$add_ln", "street" => "$add_str", "city" => "$add_cty"));

			$code = serialize($data);

			file_put_contents('data/data.txt', $code);
			
		}
	}
?>

<h2>Add Content</h2>
<table>
	<form action="add.php" method="POST">
		<tr>
			<td>Firstname:</td>
			<td><input type="text" name="firstname" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td>Lastname:</td>
			<td><input type="text" name="lastname" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td>Street:</td>
			<td><input type="text" name="street" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td>City:</td>
			<td><input type="text" name="city" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align: center"><input type="submit" value="submit" style="cursor: pointer;"></td>
		</tr>
	</form>
</table>


<?php
	echo "<table class='main-table'>";
	echo "<tr>";
	echo "<th>Firstname</th>";
	echo "<th>Lastname</th>";
	echo "</tr>";
	foreach ($data as $key => $value) {
	echo "<tr class='tr-td'>";
		echo "<td>" . $value['fname'] . "</td>";
		echo "<td>" . $value['lname'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>