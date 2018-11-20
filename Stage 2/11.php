<?php

session_start();

include('../connect/connect11.php'); 

$csprovider = $_SESSION['csprovider']; //retrieving previous page entity stored as Session Variable

	if (!empty($csprovider)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_11'])){		
		$_SESSION['yesnoConfidentiality'] = htmlentities($_POST['yesnoConfidentiality']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="../web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/progressbar.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png"/>

    <script type="text/javascript">
    	window.setTimeout(function() {
		    $(".alert").fadeTo(500, 0).slideUp(500, function(){
		        $(this).remove(); 
		    });
		}, 4000);
    </script>    
</head>
<body>
	<div class="container-fluid">	
		<!-----------------------------		
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li class="done"><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>		
		---------------------------------------->	
			<div class="header">
					<div class="ribbon"><img src="../img/bosch_ribbon.png"></div>
					<div class="navbar">
						<div class="row justify-content-between"> 
							<div class="col-4">
								<div class="logo">
									<img class="navbar-brand" src="../img/logo.png">
								</div>
							</div>
							<div class="col-4">
								<a href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
							</div>
						</div>																								
					</div>
					<h2>RBEI Cloud Customer Service Request Form</h2>									
			</div>
			<!-----------------------Progress Bar ----------------------->
					<div class="progress">
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Stage1</span>
					    <span class="tooltiptext">Stage 1 Completed</span>					    
					  </div>	
					  <span class="bar done"></span>				  
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Server</span>
					    <span class="tooltiptext">Server Details</span>
					  </div>	
					  <span class="bar done"></span>				  
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Network</span>
					    <span class="tooltiptext">Network Devices and Services</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Database</span>
					    <span class="tooltiptext">Database Specification</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">PaaS</span>
					    <span class="tooltiptext">PaaS Services</span>
					  </div>
					  <span class="bar active"></span>
					  <div class="circle active">
					    <span class="label">5</span>
					    <span class="title">Security</span>
					    <span class="tooltiptext">Security Services</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">6</span>
					    <span class="title">Backup</span>
					    <span class="tooltiptext">BackUp and High Availability</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">7</span>
					    <span class="title">Identity</span>
					    <span class="tooltiptext">Identity Management</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">8</span>
					    <span class="title">Pricing</span>
					    <span class="tooltiptext">Pricing and Payment Options</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">9</span>
					    <span class="title">Support</span>
					    <span class="tooltiptext">Support Operations</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">10</span>
					    <span class="title">monitor</span>
					    <span class="tooltiptext">Monitoring</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">11</span>
					    <span class="title">Matrix</span>
					    <span class="tooltiptext">Escalation matrix</span>
					  </div>						  
					</div>
			<!-----------------------Ends Progress Bar ----------------------->
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success10'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>					      	
					          <?php 
					          	echo $_SESSION['success10']; 
					          	unset($_SESSION['success10']);
					          ?>					      	
					      </div>
					<?php endif ?>

					<form id="security" action="11.php" method="POST">						
						<h1>Security Services</h1>
						<br>						
						<fieldset>
							<br>
							<label class="required">Will this server house personally identifiable information or confidential data ?</label>				
								<input type="radio" name="yesnoConfidentiality" id="yesCheck" value="yes" required>&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoConfidentiality" id="noCheck" value="no" required>&nbsp;No
							<br>
						</fieldset>
						<hr>						
						<h3>Antivirus</h3>						
						<br>						
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label for="antivirusName" class="required">Name:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input name="antivirusName" id="antivirusName" value="<?php echo $antivirusName; ?>" type="text" class="form-control input-sm" required>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label for="antivirusSpecification" class="required">Specification:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input id="antivirusSpecification" name="antivirusSpecification" value="<?php echo $antivirusSpecification; ?>" type="text" class="form-control input-sm" required>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label for="antivirusLicensing" class="required">Licensing:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input id="antivirusLicensing" name="antivirusLicensing" value="<?php echo $antivirusLicensing; ?>" type="text" class="form-control input-sm" required>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required" for="sslCertificate">SSL Certificate:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input type="text" name="sslCertificate" id="sslCertificate" value="<?php echo $sslCertificate; ?>" class="form-control input-sm" required>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required" for="typeOfSSL">Type of SSL Certificate:</label>
								</div>
								<div class="col col-md-3 col-lg-2">
									<select name="typeOfSSL" id="typeOfSSL" class="form-control input-sm" required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="standard">Standard</option>
										<option value="wild card">Wild card</option>															
									</select>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label for="multiSan">Multi SAN Certificate Requirement (if any):</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input type="text" id="multiSan" name="multiSan" value="<?php echo $multiSan; ?>" placeholder="(optional)" class="form-control input-sm">
								</div>							
							</div>
						</fieldset>					
						<hr>					
						<h3>Necessary access on Azure/AWS subscription</h3>	
						<br>					
						<fieldset>
						<br>							
							<div class="row">
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required" for="name1">Name:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="name1" id="name1" value="<?php echo $name1; ?>" class="form-control input-sm" required>
										</div>							
									</div>
								</div>
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required" for="user_id1">User Id:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="user_id1" id="user_id1" value="<?php echo $user_id1; ?>" class="form-control input-sm" required>
										</div>							
									</div>
								</div>															
							</div>
							<br>
							<div class="row">
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required" for="name2">Name:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="name2" id="name2" value="<?php echo $name2; ?>" class="form-control input-sm" required>
										</div>							
									</div>
								</div>
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">User Id:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="user_id2" id="user_id2" value="<?php echo $user_id2; ?>" class="form-control input-sm" required>
										</div>							
									</div>
								</div>															
							</div>	
							<br>
							<div class="row">
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">Name:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="name3" value="<?php echo $name3; ?>" class="form-control input-sm" required>
										</div>							
									</div>
								</div>
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">User Id:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="user_id3" id="user_id3" value="<?php echo $user_id3; ?>" class="form-control input-sm" required>
										</div>							
									</div>
								</div>															
							</div>
							<br>				
						</fieldset>
						<div class="row">
							<div class="col col-md-6 col-lg-6">
								
							</div>
							<div class="col col-md-6 col-lg-6">
								<p style="color: red">*For BOSCH Employees provide NT ID</p>
							</div>							
						</div>
						<br>
						<button type="submit" class="btn btn-success btn-sm" name="save_11" style="margin-top: 8px; float: right">save & Next</button>		
						<button type="button" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>						
					</form>									
				</div>	
		</div>	
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
		<script type="text/javascript">

			$("#security").validate({				
		    	focusInvalid: false,
			    invalidHandler: function(form, validator) {			        
			        if (!validator.numberOfInvalids())
			            return;			        
			        $('html, body').animate({
			            scrollTop: $(validator.errorList[0].element).offset().top-300
			        }, 1000);		        
			    }
			});

			/*

		    //Disable Right Clicks
		    $(document).bind("contextmenu",function(e) {
		    	e.preventDefault();
		    });

			//Disable F12 Inspectionr
			$(document).keydown(function(e){
				if(e.which === 123){
					return false;
				}
			});
			*/
		</script>
</body>
<!-- Copyright -->

<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
<div class="bottom_ribbon"><img src="../img/bosch_ribbon.png"></div>
</html>