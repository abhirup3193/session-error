<?php

$yesnoMonitoring ="";
$specifyMonitor ="";

$yesnoManual ="";
$componentDetails ="";

$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_16'])) {
	$yesnoMonitoring = mysqli_real_escape_string($conn, $_POST['yesnoMonitoring']);
	$specifyMonitor = mysqli_real_escape_string($conn, $_POST['specifyMonitor']);

	$yesnoManual = mysqli_real_escape_string($conn, $_POST['yesnoManual']);
	$componentDetails = mysqli_real_escape_string($conn, $_POST['componentDetails']);

	$sql ="INSERT INTO 16_monitor(yesnoMonitoring,specifyMonitor,yesnoManual,componentDetails) VALUES('$yesnoMonitoring','$specifyMonitor','$yesnoManual','$componentDetails')";
	  	
  	$_SESSION['success16'] = "monitor details saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success16'];
		    header('location: 17.php');
		} else {
		    echo $_SESSION['error'];
		}

	} 	

?>