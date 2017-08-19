<?php
$jsonString = file_get_contents(__DIR__. '/contacts.json');
$data = json_decode($jsonString, true);
//echo '<pre>';
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP: Lesson 5</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<table>
<tr>
	<th>Firt Name</th>
	<th>Last Name</th>
	<th>Address</th>
	<th>Phone Number</th>
</tr>
<?php foreach ($data as $datum) : ?>
<tr>
<td><?php echo $datum['firstName'] ?></td>
<td><?php echo $datum['lastName'] ?></td>
<td><?php echo $datum['address'] ?></td>
<td><?php echo $datum['phoneNumber'] ?></td>
</tr>
<?php endforeach; ?>	
</table>
</body>
</html>