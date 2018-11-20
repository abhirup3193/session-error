<?php
session_start();

include('../connect/connect12.php');

$yesnoConfidentiality = $_SESSION['yesnoConfidentiality']; //retrieving previous page entity stored as Session Variable

	if (!empty($yesnoConfidentiality)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_12'])){		
		$_SESSION['yesnoSR'] = htmlentities($_POST['yesnoSR']);
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
    	
    	function backupRetentionCheck() {
			if (document.getElementById('yesCheck_backupRetention').checked) {
				document.getElementById('ifYes_backupRetention').style.display = null;
				document.getElementById('ifNo_backupRetention').style.display = 'none';
			} else if (document.getElementById('noCheck_backupRetention').checked) {
				document.getElementById('ifNo_backupRetention').style.display = null;
				document.getElementById('ifYes_backupRetention').style.display = 'none';
			} 
		}
		function checkvalue(val)
		{
		    if(val==="full")
		       document.getElementById('fullBackup').style.display='block';
		    else
		       document.getElementById('fullBackup').style.display='none'; 
		}

		function checkvalueDR1() {
			if (document.getElementById('yesCheck_DR1').checked) {
				document.getElementById('ifYes_DR1').style.display = null;
				document.getElementById('ifNo_DR1').style.display = 'none';
			} else if (document.getElementById('noCheck_DR1').checked) {
				document.getElementById('ifNo_DR1').style.display = null;
				document.getElementById('ifYes_DR1').style.display = 'none';
			} 
		}

		function checkvalueDR() {
			if (document.getElementById('yesCheck_DR2').checked) {
				document.getElementById('ifYes_DR2').style.display = null;
				document.getElementById('ifNo_DR2').style.display = 'none';
			} else if (document.getElementById('noCheck_DR2').checked) {
				document.getElementById('ifNo_DR2').style.display = null;
				document.getElementById('ifYes_DR2').style.display = 'none';
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
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Security</span>
					    <span class="tooltiptext">Security Services</span>
					  </div>
					  <span class="bar active"></span>
					  <div class="circle active">
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
					<?php if (isset($_SESSION['success11'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					          <?php 
					          	echo $_SESSION['success11']; 
					          	unset ($_SESSION['success11']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="backup" action="12.php" method="POST">
						<h3>Backup and High Availability</h3>
						<br>						
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Does the system require Redundancy ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="radio" name="yesnoSR" id="yesCheck_SR" value="yes" required>&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoSR" id="noCheck_SR" value="no" required>&nbsp;No
							</div>							
						</div>
						<br>
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Does the system require High Availability ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="radio" name="yesnoHA" id="yesCheck_HA" value="yes" required>&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesnoHA" id="noCheck_HA" value="no" required>&nbsp;No
							</div>							
						</div>
						<br>
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Does the system require Disaster Recovery ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input name="yesnoDR1" id="yesCheck_DR1" type="radio" class="radioBtn" onclick="javascript:checkvalueDR1();" value="yes" required>&nbsp;Yes &nbsp;&nbsp;
								<input name="yesnoDR1" id="noCheck_DR1" type="radio" class="radioBtn" onclick="javascript:checkvalueDR1();" value="no" required>&nbsp;No
							</div>							
						</div>						
						<hr>
						<h4>Backup Policy:</h4>						
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-6 col-lg-6 from-group">
									<label class="required" style="padding-top: 5px">What is the type of backup normally across applications ?</label>
									<br>
									<select name="typeOfBackup" id="typeOfBackup" style="height: inherit; width:80%" class="form-control input-sm" onchange='checkvalue(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="full">Full Backup</option>
										<option value="partial">Partial Backup</option>
									</select>
									<br>
									<input type="text" name="fullBackup" class="form-control input-sm" value="<?php echo $fullBackup; ?>" id="fullBackup" placeholder="(eg. Daily, weekly, monthly)" style='display:none; width: 80%;'/> 
								</div>
								<div class="col col-md-3 col-lg-3 from-group">
									<h4>Time:</h4>
									<input type="radio" class="radioBtn" name="policyTime" value="Daily" required>&nbsp;&nbsp;Daily<br>
									<input type="radio" class="radioBtn" name="policyTime" value="Weekly" required>&nbsp;&nbsp;Weekly<br>
									<input type="radio" class="radioBtn" name="policyTime" value="Monthly" required>&nbsp;&nbsp;Monthly<br>
									<input type="radio" class="radioBtn" name="policyTime" value="Yearly" required>&nbsp;&nbsp;Yearly<br>
								</div>
								<div class="col col-md-3 col-lg-3 from-group">
									<h4>Specification:</h4>
									<input type="radio" class="radioBtn" name="policySpecification" value="Storage Only" required>&nbsp;&nbsp;Storage Only<br>
									<input type="radio" class="radioBtn" name="policySpecification" value="Specific Server /  Services" required>&nbsp;&nbsp;Specific Server / services<br>
									<input type="radio" class="radioBtn" name="policySpecification" value="Snapshot" required>&nbsp;&nbsp;Snapshot
								</div>
								
							</div>
														
								
							<br>											
						</fieldset>							
						<br>								
						<hr>
						<div class="row">
							<div class="col col-md-5 col-lg-4">
								<label class="required">Is there a retention policy for backups ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="radio" class="radioBtn" name="yesnoBackupRetention" onclick="javascript:backupRetentionCheck();" id="yesCheck_backupRetention" value="yes" required>&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" class="radioBtn" name="yesnoBackupRetention" onclick="javascript:backupRetentionCheck();" id="noCheck_backupRetention" value="no" required>&nbsp;No
							</div>							
						</div>
						<br>						
						<div id="ifYes_backupRetention" style="display: none">
							<div class="row">
									<div class="col col-md-5 col-lg-4">
										
									</div>
									<div class="col col-md-4 col-lg-3">
										<input id="backupRetention" type="text" name="backupRetention" value="<?php echo $backupRetention; ?>" class="form-control input-sm" placeholder="(eg. 2 years, 3 years etc.)">
									</div>							
								</div>					
							<br>
						</div>
						<div id="ifNo_backupRetention" style="display:none"></div>												
						<br>
						<div class="row">
							<div class="col col-md-5 col-lg-4">
								<label>
									What is the RTO (Recovery Time Object) in hours ?
									<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="for more info"></i>
								</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="number" class="form-control input-sm" name="rto" id value="<?php echo $rto; ?>" value="0" min="0" max="24" required>
							</div>							
						</div>
						<div class="row">							
							<div class="col col-md-5 col-lg-4">
								<p class="text-justify" style="color: #999">(RTO is the duration of time and a service level within which a business process must be restored after a disaster in order to avoid unacceptable consequences associated with a break in continuity. In other words, the RTO is the answer to the question: “How much time did it take to recover after notification of business process disruption?“)</p>
							</div>						
						</div>
						<br>
						<div class="row">
							<div class="col col-md-5 col-lg-4">
								<label>
									What is the RPO (Recovery Point Object) in hours ?
									<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="for more info"></i>
								</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="number" class="form-control input-sm" name="rpo" value="<?php echo $rpo; ?>" value="0" min="0" max="24" required>
							</div>							
						</div>
						<div class="row">							
							<div class="col col-md-5 col-lg-4">
								<p class="text-justify" style="color: #999">(The RPO is the amount of time the business can be without the service, without incurring significant risks or significant lossesRecovery Point Objective (RPO) describes the interval of time that might pass during a disruption before the quantity of data lost during that period exceeds the Business Continuity Plan’s maximum allowable threshold or “tolerance.)”
								</p>	
							</div>						
						</div>
						<br>

						<div name="ifYes_DR1" id="ifYes_DR1" style="display: none">
							<div class="row">
								<div class="col col-md-5 col-lg-4">
									<label class="required"> Do you need coverage of DR (Disaster Recovery) ?</label>
								</div>
								<div class="col col-md-4 col-lg-3">
										<input type="radio" class="radioBtn" onclick="javascript:checkvalueDR();" name="yesnoDR2" id="yesCheck_DR2" value="yes"> Yes &nbsp;&nbsp;
										<input type="radio" class="radioBtn" onclick="javascript:checkvalueDR();" name="yesnoDR2" id="noCheck_DR2" value="no">No<br>
								</div>															
							</div>																		
							<div name="ifYesDR2" id="ifYes_DR2" style="display: none">
									<br>
									<div class="row">
										<div class="col col-md-5 col-lg-4">
											
										</div>
										<div class="col col-md-4 col-lg-3">
											<p style="color: red">*Will be disscussed during meetings</p>
										</div>
								
						 			</div>									
							</div>
							<div name="ifNoDR2" id="ifNo_DR2" style="display:none">

							</div>							
						</div>
						<div name="ifNoDR1" id="ifNo_DR1" style="display: none">
							
						</div>
						<br>
						<button type="submit" class="btn btn-success btn-sm" name="save_12" style="margin-top: 8px; float: right">save & Next</button>		
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

			$("#backup").validate({				
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