<?php

$escalation ="";
$others ="";

$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_17'])) {
	$escalation = mysqli_real_escape_string($conn, $_POST['escalation']);
	$others = mysqli_real_escape_string($conn, $_POST['others']);

	$sql ="INSERT INTO 17_matrix (escalation,others) VALUES('$escalation','$others')";

	
  	$_SESSION['success17'] = "Previous Data saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success17'];
		    header('location: print.php');
		} else {
		    echo $_SESSION['error'];
	}


	} 	

?>
