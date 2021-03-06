<?php
session_start();

include('../connect/connect13.php'); 

$yesnoSR = $_SESSION['yesnoSR']; //retrieving previous page entity stored as Session Variable

	if (!empty($yesnoSR)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_13'])){		
		$_SESSION['yesnoIdentityManagement'] = htmlentities($_POST['yesnoIdentityManagement']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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

    	/*
    	
		function identityManagementCheck() {
			if (document.getElementById('yesCheck_identityManagement').checked) {
				document.getElementById('identityManagement').disabled = false;				
			} else if (document.getElementById('noCheck_identityManagement').checked) {
				document.getElementById('identityManagement').disabled = true;				
			} 
		}

		*/
		function boyl() {
			if (document.getElementById('yesCheck_boyl').checked) {
				document.getElementById('ifYes_boyl').style.display = null;
				document.getElementById('ifNo_boyl').style.display = 'none';
			} else if (document.getElementById('noCheck_boyl').checked) {
				document.getElementById('ifNo_boyl').style.display = null;
				document.getElementById('ifYes_boyl').style.display = 'none';
			} 
		}

		window.setTimeout(function() {
		    $(".alert").fadeTo(500, 0).slideUp(500, function(){
		        $(this).remove(); 
		    });
		}, 4000);

	</script>    
</head>
<body>
	<div class="container-fluid">			
			<!--------------------------------	
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li class="done"><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>
			------------------------------------------------>			
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
								<div class="home_href">
									<a href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
								</div>
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
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Security</span>
					    <span class="tooltiptext">Security Services</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Backup</span>
					    <span class="tooltiptext">BackUp and High Availability</span>
					  </div>
					  <span class="bar active"></span>
					  <div class="circle active">
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
			<!-----------------------Progress Bar ----------------------->
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success11'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					          <?php 
					          	echo $_SESSION['success11']; 
					          	unset ($_SESSION['success11']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="identityManagement" action="13.php" method="POST">											
						<h3>Identity Management</h3>
						<br>
						<div class="row">
							<div class="col col-md-4 col-lg-5 form-group">
								<label class="required">Do you have any identity management system and directory service which can integrate with your cloud services ?</label>
							</div>
							<div class="col col-md-2 col-lg-3 form-group">
								<input type="radio" name="yesnoIdentityManagement" value="Yes" onclick="javascript:identityManagementCheck();" required>&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoIdentityManagement" value="No" onclick="javascript:identityManagementCheck();" required=>&nbsp;No
							</div>							
						</div>
						<br>
						<div class="row">
								<div class="col col-md-2 col-lg-2 form-group">
									<label class="required">Provide Description :</label>
								</div>
								<div class="col col-md-4 col-lg-5 form-group">
									<textarea name="description" class="form-control input-sm" rows="5  value="<?php echo $description; ?>" id="identityManagement" minlength = "20" required></textarea><br>
									
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-2 form-group">
									<label class="required">Required License :</label>
								</div>
								<div class="col col-md-4 col-lg-5 form-group">
									<input type="text" class="form-control input-sm" name="license" value="<?php echo $license; ?>" id="identityManagement" required>
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-2 form-group">
									<label class="required">Procure License:</label>
								</div>
								<div class="col col-md-4 col-lg-5 form-group">
									<input type="text" class="form-control input-sm" name="procureLicense" value="<?php echo $procureLicense; ?>" id="identityManagement" required>
								</div>								
							</div>	
							<br>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-5 form-group">
									<label class="required">Do you have software assurance license and use it in Cloud Services (BYOL) ?</label>	
								</div>
								<div class="col col-md-4 col-lg-3 form-group">									
									<input type="radio" class="radioBtn" onclick="javascript:boyl();" name="yesnoBYOL" value="Yes" id="yesCheck_boyl" required>Yes &nbsp;&nbsp; 
									<input type="radio" class="radioBtn" onclick="javascript:boyl() na;" name="yesnoBYOL" value="No" id="noCheck_boyl" required>No <br>							
								</div>								
							</div>	
							<br>
							<div id="ifYes_boyl" style="display: none">
								<br>								
									<textarea class="form-control" name="details" value="<?php echo $details; ?>" minlength="20"  rows="5" id="comment" placeholder="Bring your own License or License Mobility in case if you have license and use it in cloud services. 
Provide details if any the box"></textarea><br>																							
							</div>
							<div id="ifNo_boyl" style="display:none">

							</div>
							<br>
							<button type="submit" class="btn btn-success btn-sm" name="save_13" style="margin-top: 8px; float: right">save & Next</button>		
							<button type="button" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
							<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>																
					</form>					
				</div>							
		</div>	
	</div>	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
		<script type="text/javascript">

			//add ID of the form after '#'

			$("#identityManagement").validate({				
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
<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
<div class="bottom_ribbon"><img src="../img/bosch_ribbon.png"></div>
</html>