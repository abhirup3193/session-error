<?php

$csprovider ="";
$csp_others ="";
$others_azure ="";
$others_aws =  "";


$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_10'])) {
	
	$checkBox = implode(',', $_POST['nameOfService']);

	$csprovider =  mysqli_real_escape_string($conn, $_POST['csprovider']);
	$csp_others =  mysqli_real_escape_string($conn, $_POST['csp_others']);	
	$others_azure = mysqli_real_escape_string($conn, $_POST['others_azure']);
	$others_aws =   mysqli_real_escape_string($conn, $_POST['others_aws']);


	
	$sql = "INSERT INTO 10_paas (csprovider,csp_others, nameOfService, others_azure, others_aws) 
					VALUES ('$csprovider', '$csp_others', '" . $checkBox . "', '$others_azure', '$others_aws')";

	  	
  	$_SESSION['success10'] = "PaaS Data saved Successfully !!";

  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success10'];
		    header('location: 11.php');
		} else {
		    echo $_SESSION['error'];
	}
	} 	

?>