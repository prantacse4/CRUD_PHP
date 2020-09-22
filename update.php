<?php 
include 'config.php';
include 'function.php';

$id = $_GET['id'];
$rec = mysqli_query($db,"SELECT * FROM uc WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$dept = $record['dept'];
	$id = $record['id'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>CRUD</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <center>
 <body>
 	<form method="post">
 	<div class="new wid">
 	<div class="header">
 		<h1>CRUDDING SUM</h1>
 	</div>
 	<div class="table">
 		<table >
 			<tr>
 				<td><p>Name</p></td>
 				<td><p>Dept</p></td>
 			</tr>
 			<tr>
 				<td><input type="text" name="name" value="<?php echo $name; ?>" Required ></td>
 				<td><input type="text" name="dept" value="<?php echo $dept; ?>" Required ></td>
 			</tr>
 		</table>

 	</div>

 	<button class="btn2" type="submit" name="update">UPDATE</button>
 	</div>
</form>
 
 </body>
 </center>
 </html>