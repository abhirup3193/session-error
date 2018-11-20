<?php

$choosepricing ="";
$addinfo ="";

$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_14'])) {
	$choosepricing = mysqli_real_escape_string($conn, $_POST['choosepricing']);
	$addinfo = mysqli_real_escape_string($conn, $_POST['addinfo']);

	$sql = "INSERT INTO 14_price (choosepricing, addinfo) VALUES('$choosepricing', '$addinfo')";

		  	
  	$_SESSION['success14'] = "Price Details saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success14'];
		    header('location: 15.php');
		} else {
		    echo $_SESSION['error'];
	}
}


?>