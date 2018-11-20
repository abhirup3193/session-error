<?php

$yesnoIdentityManagement ="";
$description ="";
$license ="";
$procureLicense ="";

$yesnoBYOL ="";
$details ="";

$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_13'])) {
	$yesnoIdentityManagement = mysqli_real_escape_string($conn, $_POST['yesnoIdentityManagement']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$license = mysqli_real_escape_string($conn, $_POST['license']);
	$procureLicense = mysqli_real_escape_string($conn, $_POST['procureLicense']);

	$yesnoBYOL = mysqli_real_escape_string($conn, $_POST['yesnoBYOL']);
	$details = mysqli_real_escape_string($conn, $_POST['details']);

	$sql ="INSERT INTO 13_identity (yesnoIdentityManagement,description,license,procureLicense,yesnoBYOL,details) 
				VALUES('$yesnoIdentityManagement','$description','$license','$procureLicense','$yesnoBYOL','$details')";

	  	
  	$_SESSION['success13'] = "Identity details saved Successfully !!";

  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success13'];
		    header('location: 14.php');
		} else {
		    echo $_SESSION['error'];
		}
	} 	

?>