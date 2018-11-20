<?php

$supportHours ="";
$timeZone ="";
$sla ="";

$recurrence ="";
$fromDay ="";
$fromTime = "";
$untilDate ="";
$untilTime = "";
$addInformation ="";

$patchType ="";
$patchTypeOthers ="";

$conn = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_15'])) {
	$supportHours = mysqli_real_escape_string($conn, $_POST['supportHours']); 
	$timeZone = mysqli_real_escape_string($conn, $_POST['timeZone']);
	$sla = mysqli_real_escape_string($conn, $_POST['sla']);

	$recurrence = mysqli_real_escape_string($conn, $_POST['recurrence']);
	$fromDay = mysqli_real_escape_string($conn, $_POST['fromDay']);
	$fromTime = mysqli_real_escape_string($conn, $_POST['fromTime']);
	$untilDate = mysqli_real_escape_string($conn, $_POST['untilDate']);
	$untilTime = mysqli_real_escape_string($conn, $_POST['untilTime']);
	$addInformation = mysqli_real_escape_string($conn, $_POST['addInformation']);

	$patchType = mysqli_real_escape_string($conn, $_POST['patchType']);
	$patchTypeOthers = mysqli_real_escape_string($conn, $_POST['patchTypeOthers']);

	$sql ="INSERT INTO 15_support (supportHours,timeZone,sla,recurrence,fromDay,fromTime,untilDate,untilTime,addInformation,patchType,patchTypeOthers) VALUES('$supportHours','$timeZone','$sla','$recurrence','$fromDay','$fromTime','$untilDate','$untilTime','$addInformation','$patchType','$patchTypeOthers')";

		
  	$_SESSION['success15'] = "Support Details saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success15'];
		    header('location: 16.php');
		} else {
		    echo $_SESSION['error'];
	}

	} 	

?>

