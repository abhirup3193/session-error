<?php

$typeOfDb = "";
$others_typeDB = "";
$reqServices = "";
$others_reqService = "";

$zoning = "";
$sizeOfDb = "";
$natureOfDb = "";

$iops = "";
$failoverReporting_yesno = "";
$replicationTool = "";

$encrypted_yesno = "";
$encrypted_details = "";

$snapshot = "";
$timeInterval = "";

$conn = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_8'])) {
	$typeOfDb = mysqli_real_escape_string($conn, $_POST['typeOfDb']);
	$others_typeDB = mysqli_real_escape_string($conn, $_POST['others_typeDB']);
	$reqServices = mysqli_real_escape_string($xonn, $_POST['reqServices']);
	$others_reqService = mysqli_real_escape_string($xonn, $_POST['others_reqService']);
	$zoning = mysqli_real_escape_string($conn, $_POST['zoning']);
	$sizeOfDb = mysqli_real_escape_string($conn, $_POST['sizeOfDb']);
	$natureOfDb = mysqli_real_escape_string($conn, $_POST['natureOfDb']);
	$iops = mysqli_real_escape_string($conn, $_POST['iops']);
	$failoverReporting_yesno = mysqli_real_escape_string($conn, $_POST['failoverReporting_yesno']);
	$replicationTool = mysqli_real_escape_string($conn, $_POST['replicationTool']);
	$encrypted_yesno = mysqli_real_escape_string($conn, $_POST['encrypted_yesno']);
	$encrypted_details = mysqli_real_escape_string($conn, $_POST['encrypted_details']);
	$snapshot = mysqli_real_escape_string($conn, $_POST['snapshot']);
	$timeInterval = mysqli_real_escape_string($conn, $_POST['timeInterval']);

	$sql = "INSERT INTO 8_databaseRequirement (typeOfDb,others_typeDB,reqServices,others_reqService,zoning,sizeOfDb,natureOfDb,iops,failoverReporting_yesno,replicationTool,encrypted_yesno,encrypted_details,snapshot,timeInterval) 
	VALUES('$typeOfDb','$others_typeDB','$reqServices','$others_reqService','$zoning','$sizeOfDb','$natureOfDb','$iops','$failoverReporting_yesno','$replicationTool','$encrypted_yesno','$encrypted_details','$snapshot','$timeInterval')";

	  	
  	$_SESSION['success8'] = "Database Details saved Successfully !!";

  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success8'];
		    header('location: 10.php');
		} else {
		    echo $_SESSION['error'];
	}
	} 	

?>


