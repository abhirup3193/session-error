<?php

$yesnoConfidentiality = "";
$antivirusName = "";
$antivirusSpecification = "";
$antivirusLicensing = "";

$sslCertificate = "";
$typeOfSSL = "";
$multiSan = "";

$name1 = "";
$user_id1 = "";

$name2 = "";
$user_id2 = "";

$name3 = "";
$user_id3 = "";

$conn = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_11'])) {
	$yesnoConfidentiality = mysqli_real_escape_string($conn, $_POST['yesnoConfidentiality']);
	$antivirusName = mysqli_real_escape_string($conn, $_POST['antivirusName']);
	$antivirusSpecification = mysqli_real_escape_string($conn, $_POST['antivirusSpecification']);
	$antivirusLicensing = mysqli_real_escape_string($conn, $_POST['antivirusLicensing']);
	$sslCertificate = mysqli_real_escape_string($conn, $_POST['sslCertificate']);
	$typeOfSSL = mysqli_real_escape_string($conn, $_POST['typeOfSSL']);
	$multiSan = mysqli_real_escape_string($conn, $_POST['multiSan']);
	$name1 = mysqli_real_escape_string($conn, $_POST['name1']);
	$user_id1 = mysqli_real_escape_string($conn, $_POST['user_id1']);
	$name2 = mysqli_real_escape_string($conn, $_POST['name2']);
	$user_id2 = mysqli_real_escape_string($conn, $_POST['user_id2']);
	$name3= mysqli_real_escape_string($conn, $_POST['name3']);
	$user_id3 = mysqli_real_escape_string($conn, $_POST['user_id3']);

	$sql = "INSERT INTO 11_security (yesnoConfidentiality,antivirusName,antivirusSpecification,antivirusLicensing,sslCertificate,typeOfSSL,multiSan,name1,user_id1,name2,user_id2,name3,user_id3) 
	VALUES ('$yesnoConfidentiality','$antivirusName','$antivirusSpecification','$antivirusLicensing','$sslCertificate','$typeOfSSL','$multiSan','$name1','$user_id1','$name2','$user_id2','$name3','$user_id3')";

	  	
  	$_SESSION['success11'] = "Security Data saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success11'];
		    header('location: 12.php');
		} else {
		    echo $_SESSION['error'];
	} 

	} 	

?>
