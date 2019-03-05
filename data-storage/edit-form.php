<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="edit-form.css">

	<title>Edit | Delete</title>
</head>
<body>
<a href="main.php">&laquo; MAIN</a>
<h2>Edit / Delete</h2>

<?php


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$curr_id = $_POST['id'];

		$d = file_get_contents('data/data.txt');
	
		$data = unserialize($d);
	
		// input-values
		$curr_fn = $data[$curr_id]['fname'];
		$curr_ln = $data[$curr_id]['lname'];
		$curr_str = $data[$curr_id]['street'];
		$curr_cty = $data[$curr_id]['city'];
	
		// echo $curr_fn;
		// echo $curr_ln;
		// echo $curr_str;
		// echo $curr_cty;

		
		if (!empty($_POST['upd_firstname']) && !empty($_POST['upd_lastname']) && !empty($_POST['upd_street']) && !empty($_POST['upd_city']) && !empty('id')) {

			// $data[$_POST['id']]['fname'];

			$data[$_POST['id']]['fname'] = strip_tags($_POST['upd_firstname']);
			$data[$_POST['id']]['lname'] = strip_tags($_POST['upd_lastname']);
			$data[$_POST['id']]['street'] = strip_tags($_POST['upd_street']);
			$data[$_POST['id']]['city'] = strip_tags($_POST['upd_city']);

			$code = serialize($data);

			file_put_contents('data/data.txt', $code);

			//header("Location: main.php");

		}
		if (isset($_POST['del_id'])) {

			unset($data[$_POST['del_id']]);

			$code = serialize($data);

			file_put_contents('data/data.txt', $code); 

			//header("Location: main.php");
		}
	}
?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

<table>
	<form action="edit-form.php" method="POST">
		<tr>
			<td>Firstname:</td>
			<td><input type="text" value="<?php if(isset($curr_fn)) echo $curr_fn ?>" name="upd_firstname" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td>Lastname:</td>
			<td><input type="text" value="<?php if(isset($curr_ln)) echo $curr_ln ?>" name="upd_lastname" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td>Street:</td>
			<td><input type="text" value="<?php if(isset($curr_str)) echo $curr_str ?>" name="upd_street" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td>City:</td>
			<td><input type="text" value="<?php if(isset($curr_cty)) echo $curr_cty ?>" name="upd_city" style="font-size: 13px; font-family: Helvetica, arial, sans-serif;"></td>
		</tr>
		<tr>
			<td style="text-align: center"></td>
			<td style="text-align: center"><input type="submit" value="update" style="cursor: pointer;"></td>
		</tr>
		<input type="hidden" name="id" value="<?php echo $curr_id ?>">
	</form>
</table>

<form action="edit-form.php" method="POST">
	<input type="hidden" name="del_id" value="<?php if(isset($curr_id)) echo $curr_id ?>">
	<button type="submit" class="del-btn">&times; delete</button>
</form>

<?php } ?>

</body>
</html>