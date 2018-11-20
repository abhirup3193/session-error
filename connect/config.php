<?php

error_reporting(0);

$connect = mysqli_connect("localhost", "root", "", "srs");
$number = count($_POST["cores"]);

if(isset($_POST['save_5']) && $number > 0)
{
	for($i=0; $i<$number; $i++)
	{		
			$sql = "INSERT INTO 5_1_configuration(reqOS, osVer, serverType, cores, memory, storage, serverNum)
			VALUES(
					'".mysqli_real_escape_string($connect, $_POST["reqOS"][$i])."',
					'".mysqli_real_escape_string($connect, $_POST["osVer"][$i])."',
					'".mysqli_real_escape_string($connect, $_POST["serverType"][$i])."',
					'".mysqli_real_escape_string($connect, $_POST["cores"][$i])."',
					'".mysqli_real_escape_string($connect, $_POST["memory"][$i])."',
					'".mysqli_real_escape_string($connect, $_POST["storage"][$i])."',
					'".mysqli_real_escape_string($connect, $_POST["serverNum"][$i])."'
				  )";
			
			if ($connect->query($sql) === TRUE) {
	    		
			} else {
			    echo $_SESSION['error'];
			} 	
	}	
}

?>
