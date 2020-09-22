<?php 
include 'config.php';
include 'function.php';
$edit_state= true;
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


 	 <?php if(isset($_SESSION['msg'])): ?>
   	 <div class="mgs">
    		<?php
    		echo $_SESSION['msg'];
    		unset($_SESSION['msg']);
    		?>
   	 </div>

	<?php endif ?>


 	<div class="table">
 		<table >
 			<tr id="hast">
 				<td><p>Name</p></td>
 				<td><p>Dept</p></td>
 				<td><p>Action1</p></td>
 				<td><p>Action2</p></td>
 			</tr>

 			<?php 
 			while($row = mysqli_fetch_array($qr)){

 			 ?>

 			<tr>
 				<td><p><?php echo $row['name']; ?></p></td>
 				<td><p><?php echo $row['dept']; ?></p></td>
 				
 				<td><p ><a class="up" href="update.php?id=<?php echo $row['id']; ?>">Update</a></p></td>
 				<td><p><a class="del" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></p></td>
 			</tr>
 			<?php } ?>
 		</table>

 	</div>
 	<br><br><br>
 	<div class="addnew">
 		<table>
 			<tr>
 				<td><a href="add.php">ADD NEW</a></td>

 			</tr>
 		</table>
 	</div>
 	</div>
</form>
 
 </body>
 </center>
 </html>