<?php
	require_once("connection.php");
	
	$id=$_REQUEST["id"];
	$query="DELETE FROM tbl_user WHERE id='$id'";
	$run_query=mysqli_query($connect,$query);
	if($run_query==true){
		echo "1";
	}
	
	
?>