<?php
require_once("../../dbconnect.php");

	$eventname = mysqli_real_escape_string($connect,$_POST["eventname"]);
	$description = mysqli_real_escape_string($connect,$_POST["description"]);
	$address = mysqli_real_escape_string($connect,$_POST["address"]);
	$date = mysqli_real_escape_string($connect,$_POST["date"]);
	$time1 = mysqli_real_escape_string($connect,$_POST["time1"]);
	$time2 = mysqli_real_escape_string($connect,$_POST["time2"]);
	$time3 = mysqli_real_escape_string($connect,$_POST["time3"]);
	$time4 = mysqli_real_escape_string($connect,$_POST["time4"]);
	$time = $time1." ".$time2." To ".$time3." ".$time4;
	$query = "INSERT INTO schedule(eventname,date,time,address,description)VALUES('$eventname','$date','$time','$address','$description')";
	$execute1=mysqli_query($connect, $query);
	if($execute1){
		echo "success";
	}else{
		echo "fail";
	}

?>