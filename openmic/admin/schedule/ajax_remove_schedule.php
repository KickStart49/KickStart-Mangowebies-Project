<?php require_once("../../dbconnect.php"); 
$id = $_POST["id"]; 
$sql = "DELETE FROM schedule WHERE id=".$id;
$execute=mysqli_query($connect, $sql);
if($execute){
	echo "success";
}