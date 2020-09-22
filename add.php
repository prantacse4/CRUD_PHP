<?php 
include 'config.php';
include 'function.php';
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
 				<td><input type="text" name="name" Required ></td>
 				<td><input type="text" name="dept" Required ></td>
 			</tr>
 		</table>

 	</div>

 	<button class="btn" type="submit" name="add">ADD</button>
 	</div>
</form>
 
 </body>
 </center>
 </html>