<?php

// initializing variables
$organization = "";
$street = "";
$building = "";
$landmark = "";
$city = "";
$zipcode = "";
$country = "";
$website = "";

$firstName1 = "";
$midName1 = "";
$lastName1 = "";
$gender1 = "";
$email1 = "";
$phonecode1 = "";
$phone1 = "";

$firstName2 = "";
$midName2 = "";
$lastName2 = "";
$gender2 = "";
$email2 = "";
$phonecode2 = "";
$phone2 = "";

$req_date = date('Y-m-d');
$exp_date = "";

$projectName = "";
$endUser = "";

$errors = array();

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_1'])) {
	$organization = mysqli_real_escape_string($conn, $_POST['organization']);
	$street = mysqli_real_escape_string($conn, $_POST['street']);
	$building = mysqli_real_escape_string($conn, $_POST['building']);
	$landmark = mysqli_real_escape_string($conn, $_POST['landmark']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$website = mysqli_real_escape_string($conn, $_POST['website']);

	$firstName1 = mysqli_real_escape_string($conn, $_POST['firstName1']);	
	$midName1 = mysqli_real_escape_string($conn, $_POST['midName1']);
	$lastName1 = mysqli_real_escape_string($conn, $_POST['lastName1']);
	$gender1 = mysqli_real_escape_string($conn, $_POST['gender1']);
	$email1 = mysqli_real_escape_string($conn, $_POST['email1']);
	$phonecode1 = mysqli_real_escape_string($conn, $_POST['phonecode1']);
	$phone1 = mysqli_real_escape_string($conn, $_POST['phone1']);


	$firstName2 = mysqli_real_escape_string($conn, $_POST['firstName2']);	
	$midName2 = mysqli_real_escape_string($conn, $_POST['midName2']);
	$lastName2 = mysqli_real_escape_string($conn, $_POST['lastName2']);
	$gender2 = mysqli_real_escape_string($conn, $_POST['gender2']);
	$email2 = mysqli_real_escape_string($conn, $_POST['email2']);
	$phonecode2 = mysqli_real_escape_string($conn, $_POST['phonecode2']);
	$phone2 = mysqli_real_escape_string($conn, $_POST['phone2']);
	
	$exp_date = mysqli_real_escape_string($conn, $_POST['exp_date']);

	$projectName = mysqli_real_escape_string($conn, $_POST['projectName']);
	$endUser = mysqli_real_escape_string($conn, $_POST['endUser']);

	$sql = "INSERT INTO 1_basic_info (organization, street, building, landmark, city, zipcode, country, website, firstName1, midName1, lastName1, gender1, email1, phonecode1, phone1, firstName2, midName2, lastName2, gender2, email2, phonecode2, phone2, req_date, exp_date, projectName, endUser) 
  			  VALUES('$organization', '$street', '$building', '$landmark', '$city', '$zipcode', '$country', '$website', '$firstName1', '$midName1', '$lastName1', '$gender1','$email1', '$phonecode1', '$phone1', '$firstName2','$midName2', '$lastName2','$gender2','$email2', '$phonecode2', '$phone2','$req_date', '$exp_date', '$projectName', '$endUser')";
  	
  	  	
  	$_SESSION['success1'] = "Basic Information saved Successfully !!";
  	$_SESSION['error'] = "Error";

  	if ($conn->query($sql) === TRUE) {
    		echo $_SESSION['success1'];
		    header('location: 2.php');
		} else {
		    echo $_SESSION['error'];
	}

  	

	} 	

?>