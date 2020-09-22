<?php 
include 'config.php';
 ?>
 <?php 
//delete
 	session_start();
 	$edit_state = true;

	$id = $_GET['id'];
	$q = "DELETE FROM uc WHERE id=$id ";
	$qr = mysqli_query($db,$q);
	$_SESSION['msg']= "Data Deleted";
	header('location:index.php');

 ?>