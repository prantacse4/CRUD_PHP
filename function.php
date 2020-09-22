<?php 
include 'config.php';
 ?>
 <?php 
 session_start();
 $edit_state = false;

 //INSERT
if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$q = "INSERT INTO uc(name,dept) VALUES('$name','$dept') ";
	$qr = mysqli_query($db,$q);
	$_SESSION['msg']= "Data Added";
	header('location:index.php');
	
}
if (isset($_POST['update'])) {
	$id = $_GET['id'];
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$q = "UPDATE uc SET id=$id, name='$name',dept='$dept' WHERE id=$id ";
	$qr = mysqli_query($db,$q);
	$_SESSION['msg']= "Data Updated";
	header('location:index.php');
	
}

//read


	$q = "SELECT * FROM uc";
	$qr = mysqli_query($db,$q);






  ?>