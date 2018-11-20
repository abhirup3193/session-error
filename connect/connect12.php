<?php

$yesnoSR ="";
$yesnoHA ="";
$yesnoDR1 ="";

$typeOfBackup ="";
$fullBackup ="";
$policyTime ="";
$policySpecification ="";

$yesnoBackupRetention ="";
$backupRetention ="";

$rto ="";
$rpo ="";

$yesnoDR2 ="";

$conn = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_12'])) {
	$yesnoSR = mysqli_real_escape_string($conn, $_POST['yesnoSR']);
	$yesnoHA = mysqli_real_escape_string($conn, $_POST['yesnoHA']);
	$yesnoDR1 = mysqli_real_escape_string($conn, $_POST['yesnoDR1']);

	$typeOfBackup = mysqli_real_escape_string($conn, $_POST['typeOfBackup']);
	$fullBackup = mysqli_real_escape_string($conn, $_POST['fullBackup']);
	$policyTime = mysqli_real_escape_string($conn, $_POST['policyTime']);
	$policySpecification = mysqli_real_escape_string($conn, $_POST['policySpecification']);

	$yesnoBackupRetention = mysqli_real_escape_string($conn, $_POST['yesnoBackupRetention']);
	$backupRetention = mysqli_real_escape_string($conn, $_POST['backupRetention']);
	
	$rto = mysqli_real_escape_string($conn, $_POST['rto']);
	$rpo = mysqli_real_escape_string($conn, $_POST['rpo']);
	$yesnoDR2 = mysqli_real_escape_string($conn, $_POST['yesnoDR2']);

	$sql ="INSERT INTO 12_backup (yesnoSR,yesnoHA,yesnoDR1,typeOfBackup,fullBackup,policyTime,policySpecification,yesnoBackupRetention,backupRetention,rto,rpo,yesnoDR2) 
					VALUES('$yesnoSR','$yesnoHA','$yesnoDR1','$typeOfBackup','$fullBackup','$policyTime','$policySpecification','$yesnoBackupRetention','$backupRetention','$rto','$rpo','$yesnoDR2')";
	  	
  	$_SESSION['success12'] = "Backup Details saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success12'];
		    header('location: 13.php');
		} else {
		    echo $_SESSION['error'];
	}

  	

	} 	

?>

