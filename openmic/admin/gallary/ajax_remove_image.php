<?php require_once("../../dbconnect.php"); 
$id = $_POST["id"]; 
$sql = "DELETE FROM gallary WHERE id=".$id;
$execute=mysqli_query($connect, $sql);
if($execute){
}