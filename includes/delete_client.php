<?php ob_start(); ?>
<?php include_once "../config/db.php"; ?>
<?php

	global $connection;  
	$id = $_POST['id'];        
	$not_delete_client_query = "UPDATE clients SET isDeleted= '1' WHERE clientID='".$id."'" ;
	$note_delete_query = mysqli_query($connection, $not_delete_client_query); 

?>
