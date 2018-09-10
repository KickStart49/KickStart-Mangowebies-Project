<?php
require_once("../../dbconnect.php");

	$uploaddir = '../../uploads/';
	$upload = $_FILES['upload']['name'];
	$target = $uploaddir . basename($_FILES['upload']['name']);
	move_uploaded_file($_FILES['upload']['tmp_name'], $target);
	$query = "INSERT INTO gallary(image)VALUES('$upload')";
	$execute1=mysqli_query($connect, $query);
	if($execute1){
		
	}else{
		
	}
	echo '<script type="text/javascript">
	location.href = "gallary_dashboard.php";
</script>';
?>
