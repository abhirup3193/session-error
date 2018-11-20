<?php

$yesno_defaultGateway ="";
$ipv6 ="";

$yesno_loadBalancer ="";
$name ="";
$ipaddress ="";
$port ="";
$protocol ="";

$yesno_vpn ="";
$tunnelProtocol ="";

$publicip ="";
$othernd ="";
$cdnProvider ="";
$cdnProviderOthers = "";

$conn = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_6'])) {
	$yesno_defaultGateway = mysqli_real_escape_string($conn, $_POST['yesno_defaultGateway']);
	$ipv6 = mysqli_real_escape_string($conn, $_POST['ipv6']);
	$yesno_loadBalancer = mysqli_real_escape_string($conn, $_POST['yesno_loadBalancer']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$ipaddress = mysqli_real_escape_string($conn, $_POST['ipaddress']);
	$port = mysqli_real_escape_string($conn, $_POST['port']);
	$protocol = mysqli_real_escape_string($conn, $_POST['protocol']);
	$yesno_vpn = mysqli_real_escape_string($conn, $_POST['yesno_vpn']);
	$tunnelProtocol = mysqli_real_escape_string($conn, $_POST['tunnelProtocol']);
	$publicip = mysqli_real_escape_string($conn, $_POST['publicip']);
	$othernd = mysqli_real_escape_string($conn, $_POST['othernd']);
	$cdnProvider = mysqli_real_escape_string($conn, $_POST['cdnProvider']);
	$cdnProviderOthers = mysqli_real_escape_string($conn, $_POST['cdnProviderOthers']);

	$sql ="INSERT INTO 6_network(yesno_defaultGateway,ipv6,yesno_loadBalancer,name,ipaddress,port,protocol,yesno_vpn,tunnelProtocol,publicip,othernd,cdnProvider,cdnProviderOthers) 
	VALUES('$yesno_defaultGateway','$ipv6','$yesno_loadBalancer','$name','$ipaddress','$port','$protocol','$yesno_vpn','$tunnelProtocol','$publicip','$othernd','$cdnProvider','$cdnProviderOthers')";

	
  	$_SESSION['success6'] = "Network Details saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success6'];
		    header('location: 8.php');
		} else {
		    echo $_SESSION['error'];
	}  	

	} 	

?>



