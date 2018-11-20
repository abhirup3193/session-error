<?php
session_start();

include('../connect/connect8.php'); 

$yesno = $_SESSION['yesno_defaultGateway']; //retrieving previous page entity stored as Session Variable

	if (!empty($yesno_defaultGateway)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_8'])){		
		$_SESSION['typeOfDb'] = htmlentities($_POST['typeOfDb']);
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
    	
    	function replicationModeCheck() {
			if (document.getElementById('yesCheck_replicationMode').checked) {
				document.getElementById('ifYes_replicationMode').style.display = null;
				document.getElementById('ifNo_replicationMode').style.display = 'none';
			} else if (document.getElementById('noCheck_replicationMode').checked) {
				document.getElementById('ifNo_replicationMode').style.display = null;
				document.getElementById('ifYes_replicationMode').style.display = 'none';
			} 
		}

		function checkvalue(val)
		{
		    if(val==="automated")
		       document.getElementById('snapshot').style.display='block';
		    else
		       document.getElementById('snapshot').style.display='none'; 
		}

		function checkvalueDB(val)
		{
		    if(val==="Others")
		       document.getElementById('others_typeDB').style.display='block';
		    else
		       document.getElementById('others_typeDB').style.display='none'; 
		}

		function chkRequiredServices(val)
		{
			 if(val==="Others")
		       document.getElementById('others_reqService').style.display='block';
		    else
		       document.getElementById('others_reqService').style.display='none';
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
	<!-------------------------			
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					<li class="active"><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>
	------------------------------------->		
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
					  <span class="bar active"></span>
					  <div class="circle active">
					    <span class="label">3</span>
					    <span class="title">Database</span>
					    <span class="tooltiptext">Database Specification</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
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
					<?php if (isset($_SESSION['success6'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>					      	
					          <?php 
					          	echo $_SESSION['success6']; 
					          	unset($_SESSION['success6']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="databaseRequirement" action="8.php" method="POST">											
						<h3>Database specification</h3>
						<br>
						<fieldset>
							<div class="row">
								<br>
								<div class="col col-md-3 col-lg-2">
									<label class="required" style="margin-top: 7px">Type of database:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select name="typeOfDb" value="<?php echo $typeOfDb; ?>" class="form-control input-sm" onchange='checkvalueDB(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Oracle">Oracle</option>
										<option value="RDB">Relational DB</option>
										<option value="DDB">Distributed DB</option>
										<option value="KDB">Key Value DB</option>										
										<option value="NoSQL">NoSQL</option>
										<option value="Others">Others</option>								
									</select>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="text" name="others_typeDB" value="<?php echo $others_typeDB; ?>"  id="others_typeDB" class="form-control input-sm" minlength="5" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>							
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Required Services:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select id="reqServices" name="reqServices" class="form-control input-sm" value="<?php echo $reqServices; ?>" onchange='chkRequiredServices(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="RDS">RDS</option>
										<option value="DynamoDB">Dynamo DB</option>
										<option value="MongoDB">Mongo DB</option>	
										<option value="Others">Others</option>							
									</select>	
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="text" name="others_reqService" value="<?php echo $others_reqService; ?>" id="others_reqService" class="form-control input-sm" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>												
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">									
									<label class="required">Zoning Requirements:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="radio" name="zoning" id="zoning" value="Single Availability Zone" required>&nbsp;Single Availability Zone<br>
									<input type="radio" name="zoning" id="zoning" value="Multi Availability Zone" required>&nbsp;Multi Availability Zone								
								</div>							
							</div>	
							<br>						
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required" style="padding-top: 5px">Typical size of database:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<input id="sizeOfDb" name="sizeOfDb" value="<?php echo $sizeOfDb; ?>" type="text" class="form-control input-sm" required>
								</div>								
							</div>							
							<div class="row">
								<br>
								<div class="col col-md-3 col-lg-2">
									<label class="required">Nature of DB activity:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="radio" name="natureOfDb" value="read mostly" required>&nbsp;Read Mostly<br>
									<input type="radio" name="natureOfDb" value="write mostly" required>&nbsp;Write Mostly<br>
									<input type="radio" name="natureOfDb" value="equal" required>&nbsp;Equal amount of Reads and Writes
								</div>
							</div>
							<br>							
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-12 col-lg-12">
									<label class="required">Any specific IOPS requirement for DB ?</label><br>
								</div>
								<br>
								<div class="col col-md-12 col-lg-12">
									<textarea class="form-control input-sm" name="iops" value="<?php echo $iops; ?>" placeholder="Specify IOPS requirements in the text box" rows="5" id="iops" minlength="20" required></textarea>
								</div>							
							</div>
							<br>														
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-12 col-lg-12">
									<label class="required">Are the Database setup in replication mode for fail-over / reporting ?</label>
								</div>
								<br><br>
								<div class="col col-md-12 col-lg-12">
									<input type="radio" class="radioBtn" onclick="javascript:replicationModeCheck();" name="failoverReporting_yesno" id="yesCheck_replicationMode" value="yes" required> Yes &nbsp;&nbsp;
									<input type="radio" class="radioBtn" onclick="javascript:replicationModeCheck();" name="failoverReporting_yesno" id="noCheck_replicationMode" value="no" required>No<br>
								</div>															
							</div>						
														
							<div id="ifYes_replicationMode" style="display: none">
								<br>
									<label for="replicationTool" type="text">Mention the replication tools that are normally used:</label>
									<textarea class="form-control input-sm" rows="5" name="replicationTool" value="<?php echo $replicationTool; ?>" id="replicationTool" placeholder="Native / Data guard / DB visit" minlength="20"></textarea>
								<br>								
							</div>
							<div id="ifNo_replicationMode" style="display:none">

							</div>	
							<br>
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<label class="required">Are any of the databases / DB elements encrypted at rest ?</label><br>
								<input type="radio" name="encrypted_yesno" id="encrypted_yes" value="Yes" required>&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="encrypted_yesno" id="encrypted_no" value="No" required>&nbsp;No<br>
							<br>
							<textarea class="form-control input-sm" rows="5" name="encrypted_details" id="encrypted_details" value="<?php echo $encrypted_details; ?>" placeholder="Provide Encryption Details" minlength="20" required></textarea>
							<br>
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3  col-lg-2">
									<label class="required" style="padding-top: 5px">Snapshot for DB instances:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select name="snapshot" value="<?php echo $snapshot; ?>" class="form-control input-sm" style="height: inherit" onchange='checkvalue(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="manual">Manual Snapshot</option>
										<option value="automated">Automated Snapshot</option>
									</select>
								</div>							
							</div>							
							<br>
							<div class="row">								
								<div name="snapshot" id="snapshot" style='display:none;'>
									<div class="col col-md-3  col-lg-2">
										<label class="required"  style="padding-top: 5px">Time Interval:</label>
									</div>
									<div class="col col-md-3 col-lg-3">
										<select class="form-control input-sm" name="timeInterval" value="<?php echo $timeInterval; ?>">
											<option value="default" disabled selected hidden>--select--</option>
											<option value="daily">Daily</option>
											<option value="weekly">Weekly</option>
											<option value="monthly">Monthly</option>
										</select>
									</div>									  								
								</div>
							</div>	
							<br>												
						</fieldset>	
						<br>
						<button type="submit" class="btn btn-success btn-sm" name="save_8" style="margin-top: 8px; float: right">save & Next</button>	
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

			$("#databaseRequirement").validate({				
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