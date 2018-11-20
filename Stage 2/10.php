<?php

session_start();

include('../connect/connect10.php'); 

$typeOfDb = $_SESSION['typeOfDb']; //retrieving previous page entity stored as Session Variable

	if (!empty($typeOfDb)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_10'])){		
		$_SESSION['csprovider'] = htmlentities($_POST['csprovider']);
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
    	
    	function checkvalue(val)
		{
		    if(val==="others")
		    {
		    	document.getElementById('csp_aws').style.display='none';
		   		document.getElementById('csp_azure').style.display='none';
		       	document.getElementById('csp_others').style.display='block';
		    }
		    else if (val==="aws")
		    {
		    	document.getElementById('csp_aws').style.display='block';
		    	document.getElementById('csp_azure').style.display='none';
		    	document.getElementById('csp_others').style.display='none'; 
		    }
		    	
		    else if (val==="azure")
		    {
		    	document.getElementById('csp_aws').style.display='none';
		    	document.getElementById('csp_azure').style.display='block';
		      	document.getElementById('csp_others').style.display='none';
		    }
		}		

		function OnChangeCheckbox_aws (checkbox) {
	        if (checkbox.checked) {
	            document.getElementById('txtToggle_aws').style.display="block"; 
	        }
	        else {
	            document.getElementById('txtToggle_aws').style.display="none"; 
	        }
	    }

	    function OnChangeCheckbox_azure (checkbox) {
	        if (checkbox.checked) {
	            document.getElementById('txtToggle_azure').style.display="block"; 
	        }
	        else {
	            document.getElementById('txtToggle_azure').style.display="none"; 
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
			<!--------------------------------------		
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					
					<li class="active"><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>	
			------------------------------------------>		
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
					  <span class="bar active"></span>
					  <div class="circle active">
					    <span class="label">4</span>
					    <span class="title">PaaS</span>
					    <span class="tooltiptext">PaaS Services</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
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
			<!-----------------------Progress Bar ----------------------->
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success8'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>					      	
					          <?php 
					          	echo $_SESSION['success8']; 
					          	unset($_SESSION['success8']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="paas" action="10.php" method="POST">						
						<h3>PaaS services</h3>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Select cloud service provider:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select name="csprovider" value="<?php echo $csprovider; ?>" class="form-control input-sm" onchange='checkvalue(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="aws">AWS</option>
										<option value="azure">Azure</option>
										<option value="others">Others</option>
									</select>
								</div>							
							</div>
							<br>	

							<div name="csp_aws" id="csp_aws" style='display:none;'>
								<br>
								<div class="row">
									<div class="col col-md-3 col-lg-3">									
										<label class="required">Name of application / service/ DB/ device:</label>
									</div>
									<div class="col col-md-3 col-lg-3">
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Glacier"/> Glacier <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="RDS"/> RDS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="RedShift"/> RedShift <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Dynamo DB"/> Dynamo DB <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Elastic Cache"/> Elastic Cache <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Lambda"/> Lambda <br>										
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="AWS Autoscaling"/> AWS Autoscaling <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Kinesis"/> Kinesis <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Cloud Search"/> Cloud Search <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value=" Elastic Search"/> Elastic Search <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Data pipeline"/> Data pipeline <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="WAF/ Shield"/> WAF / Shield<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="SNS"/> SNS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="SQS"/> SQS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Cloud front"/> Cloud front <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="IoT"/> IoT <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]_others" value="others_aws" onclick="OnChangeCheckbox_aws (this)" id="chkAssociation_aws"/> Other
										&nbsp;&nbsp;&nbsp;<input type="text" name="others_aws" class="form-control input-sm" value="<?php echo $others_aws; ?>" id="txtToggle_aws" placeholder="(Other)" style="display:none"/>
									</div>	
								</div>																						
							</div>	
												
							<div name="csp_azure" id="csp_azure" style='display:none;'>
								<br>
								<div class="row">
									<div class="col col-md-3 col-lg-3">
										<label class="required">Name of application / service/ DB/ device:</label>
									</div>
									<div class="col col-md-3 col-lg-3">
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Container Services" /> Container Services <br> 
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Storage Accounts" /> Storage Accounts<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="CDN" /> CDN<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Notification Hub" /> Notification Hub<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Redis Cache" /> Redis Cache<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="SQL Database" /> SQL Database<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Cosmos DB" /> Cosmos DB<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Cognitive Services" /> Cognitive Services<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="IoT Hub" /> IoT Hub<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Service Bus" /> Service Bus<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]" value="Web Apps"> Web Apps<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameOfService[]_others" value="others_azure" onclick="OnChangeCheckbox_azure (this)" id="chkAssociation_azure"/> Other
										&nbsp;&nbsp;&nbsp;<input type="text" name="others_azure" id="txtToggle_azure" name="others_azure" class="form-control input-sm" value="<?php echo $others_azure; ?>" placeholder="(other)" style="display:none"/>
									</div>
								</div>
							</div>

							<div name="csp_others " id="csp_others" style='display:none;'>
								<br>
								<label>Name of application / service/ DB/ device:</label>
								<textarea class="form-control input-sm" name="csp_others" value="<?php echo $csp_others; ?>" rows="5" placeholder="Provide Description"></textarea><br> 
							</div>
							<br>
						</fieldset>	
						<br>
						<button type="submit" class="btn btn-success btn-sm" name="save_10" style="margin-top: 8px; float: right">save & Next</button>		
						<button type="button" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>						
					</form>					
				</div>
		</div>	
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
		<script type="text/javascript">

			$("#paas").validate({				
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