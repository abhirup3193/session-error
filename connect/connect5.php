<?php


$numOfServer = "";
$serverRuntime = "";
$serverRegion = "";
$domainName = "";
$dnsHost = "";
$dnsHost_others = "";

$storageReq = "";
$fileStorage_yesno = "";
$additionalVol_yesno = "";
$additionalVol_num = "";
$additionalVol_size = "";

$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_5'])) {

	$checkBox_reqEnv = implode(',', $_POST['reqEnv']);

	$numOfServer = mysqli_real_escape_string($conn, $_POST['numOfServer']);
	$serverRuntime = mysqli_real_escape_string($conn, $_POST['serverRuntime']);
	$serverRegion = mysqli_real_escape_string($conn, $_POST['serverRegion']);
	$domainName = mysqli_real_escape_string($conn, $_POST['domainName']);
	$dnsHost = mysqli_real_escape_string($conn, $_POST['dnsHost']);
	$dnsHost_others = mysqli_real_escape_string($conn, $_POST['dnsHost_others']);

	$storageReq  = mysqli_real_escape_string($conn, $_POST['storageReq']);
	$fileStorage_yesno = mysqli_real_escape_string($conn, $_POST['fileStorage_yesno']);
	$additionalVol_yesno = mysqli_real_escape_string($conn, $_POST['additionalVol_yesno']);
	$additionalVol_num = mysqli_real_escape_string($conn, $_POST['additionalVol_num']);
	$additionalVol_size =  mysqli_real_escape_string($conn, $_POST['additionalVol_size']);	
	

	$sql = "INSERT INTO 5_serverDetails (reqEnv, numOfServer, serverRuntime, serverRegion, domainName, dnsHost, dnsHost_others, storageReq, fileStorage_yesno, additionalVol_yesno, additionalVol_num, additionalVol_size)
	VALUES  ('" . $checkBox_reqEnv . "','$numOfServer','$serverRuntime', '$serverRegion', '$domainName', '$dnsHost', '$dnsHost_others', '$storageReq', '$fileStorage_yesno', '$additionalVol_yesno','$additionalVol_num', '$additionalVol_size')";


  	$_SESSION['success5'] = "Server Details saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
	    		echo $_SESSION['success5'];
			    header('location: 6.php');
			} else {
			    echo $_SESSION['error'];
			} 

}