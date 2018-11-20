<?php

$migrate = "";
$plans = "";
$yesno = "";
$virtualization = "";


$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_2'])) {
	$migrate = mysqli_real_escape_string($conn, $_POST['migrate']);
	$plans = mysqli_real_escape_string($conn, $_POST['plans']);
	$yesno = mysqli_real_escape_string($conn, $_POST['yesno']);
	$virtualization = mysqli_real_escape_string($conn, $_POST['virtualization']);

	$sql = "INSERT INTO 2_strategy (migrate, plans, yesno, virtualization) VALUES ('$migrate','$plans', '$yesno', '$virtualization')";
	  	
  	$_SESSION['success2'] = "Strategy Information saved Successfully !!";
  	$_SESSION['error'] = "Error";

	  	if ($conn->query($sql) === TRUE) {
	    		echo $_SESSION['success2'];
			    header('location: 3.php');
			} else {
			    echo $_SESSION['error'];
			}  	

	}

?>