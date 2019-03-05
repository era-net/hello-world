<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="main.css">

	<title>MAIN</title>
</head>
<body>
<h2>Storing data without MySQL: is it possible?</h2>
<p>Pick an entry in the select menu, to edit or delete it.</p>
<a href="add.php">+ Add entry</a>

<?php
/* REFRESH DATABASE
a:2:{i:1;a:4:{s:5:"fname";s:4:"Marc";s:5:"lname";s:2:"Zb";s:6:"street";s:10:"Marcstreet";s:4:"city";s:7:"Marcity";}i:2;a:4:{s:5:"fname";s:5:"Betty";s:5:"lname";s:5:"Bossy";s:6:"street";s:11:"Bettystreet";s:4:"city";s:10:"Bettington";}}
*/

$d = file_get_contents("data/data.txt");

$data = unserialize($d);


function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

uasort($data, 'cmp');

	echo "<p style='text-align: center;'>";
	echo "<select id='sel' onchange='getKey();'>";
	echo "<option selected disabled>- Select entry -</option>";
	foreach ($data as $key => $value) {
	echo "<option value='$key' title='$key'>". $value['fname'] . " " . $value['lname'] . "</option>";
	}
	echo "</select>";
	echo "</p>";
?>

<form action="edit-form.php" method="POST">
	<input type="hidden" name="id" id="id-ipt">
	<input type="submit" id="sbmt-btn" style="visibility: hidden;">
</form>

<?php
	echo "<table class='main-table'>";
	echo "<tr style='cursor: default;'>";
	echo "<th>Firstname</th>";
	echo "<th>Lastname</th>";
	echo "<th>Street</th>";
	echo "<th>City</th>";
	echo "</tr>";
	foreach ($data as $key => $value) {
	echo "<tr class='tr-td'>";
		echo "<td>" . $value['fname'] . "</td>";
		echo "<td>" . $value['lname'] . "</td>";
		echo "<td>" . $value['street'] . "</td>";
		echo "<td>" . $value['city'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
?>
<script type="text/javascript" src="main.js"></script>
</body>
</html>