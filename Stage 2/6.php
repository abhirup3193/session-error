<?php
session_start();

include('../connect/connect6.php'); 


$reqEnv = $_SESSION['serverRuntime']; //retrieving previous page entity stored as Session Variable

	if (!empty($serverRuntime)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_6'])){		
		$_SESSION['yesno_defaultGateway'] = htmlentities($_POST['yesno_defaultGateway']);
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
		function defaultGatewayCheck() {
			if (document.getElementById('yesCheck_defaultGateway').checked) {
				document.getElementById('ifYes_defaultGateway').style.display = null;
				document.getElementById('ifNo_defaultGateway').style.display = 'none';
			} else if (document.getElementById('noCheck_defaultGateway').checked) {
				document.getElementById('ifNo_defaultGateway').style.display = null;
				document.getElementById('ifYes_defaultGateway').style.display = 'none';
			} 
		}

		function loadBalancerCheck() {
			if (document.getElementById('yesCheck_loadBalancer').checked) {
				document.getElementById('ifYes_loadBalancer').style.display = null;
				document.getElementById('ifNo_loadBalancer').style.display = 'none';
			} else if (document.getElementById('noCheck_loadBalancer').checked) {
				document.getElementById('ifNo_loadBalancer').style.display = null;
				document.getElementById('ifYes_loadBalancer').style.display = 'none';
			} 
		}

		function vpnCheck() {
			if (document.getElementById('yesCheck_vpn').checked) {
				document.getElementById('ifYes_vpn').style.display = null;
				document.getElementById('ifNo_vpn').style.display = 'none';
			} else if (document.getElementById('noCheck_vpn').checked) {
				document.getElementById('ifNo_vpn').style.display = null;
				document.getElementById('ifYes_vpn').style.display = 'none';
			} 
		}

		function checkvalue(val)
		{
		    if(val==="Others")
		       document.getElementById('CDNprovider').style.display='block';
		    else
		       document.getElementById('CDNprovider').style.display='none'; 
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
	<!-----------------------------			
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li class="active"><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					
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
		--------------------------------->		
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
					<div class="progress" title="Stage 1">
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
					  <span class="bar active"></span>				  
					  <div class="circle active">
					    <span class="label">2</span>
					    <span class="title">Network</span>
					    <span class="tooltiptext">Network Devices and Services</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
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
					<?php if (isset($_SESSION['success5'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>	      	
					          <?php 
					          	echo $_SESSION['success5']; 
					          	unset($_SESSION['success5']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="network" action="6.php" method="POST">
					<h3>Network Devices and Services</h3><br>						

						<!-----------------Application Gateway------------------------------->
						<div class="row">
								<div class="col col-md-4 col-lg-3">
									<label class="required">Do you require application gateway ?</label>
								</div>
								<div class="col col-md-3 col-lg-4" style="padding: 3px">									
									<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:defaultGatewayCheck();" name="yesno_defaultGateway" id="yesCheck_defaultGateway" value="yes" required>Yes &nbsp;&nbsp;</label>
									<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:defaultGatewayCheck();" name="yesno_defaultGateway" id="noCheck_defaultGateway" value="no" required>No</label>									
								</div>								
						</div>
						<br>													
						<div id="ifYes_defaultGateway" style="display: none">
							<fieldset>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="defaultGateway" type="text" style="padding: 10px">IPv6 Default Gateway:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="defaultGateway" name="ipv6" value="<?php echo $ipv6;?>" pattern="^((?:[0-9A-Fa-f]{1,4}))((?::[0-9A-Fa-f]{1,4}))*::((?:[0-9A-Fa-f]{1,4}))((?::[0-9A-Fa-f]{1,4}))*|((?:[0-9A-Fa-f]{1,4}))((?::[0-9A-Fa-f]{1,4})){7}$" class="form-control input-sm" type="text" placeholder="e.g FE80:CD00:0:CDE:1257:0:211E:729C " style="margin-top: 10px">
										<br>										
									</div>									
								</div>																						
							</fieldset>
							<br>
						</div>
						<div id="ifNo_defaultGateway" style="display:none">

						</div>
						<!---------------------Load Balancer-------------------------->
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Do you require load balancer ?</label>
							</div>
							<div class="col col-md-3 col-lg-4" style="padding: 3px">
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:loadBalancerCheck();" name="yesno_loadBalancer" id="yesCheck_loadBalancer" value="yes" required>Yes &nbsp;&nbsp; </label>
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:loadBalancerCheck();" name="yesno_loadBalancer" id="noCheck_loadBalancer" value="no" required>No </label>
							</div>							
						</div>
						<br>							
						<div id="ifYes_loadBalancer" style="display: none">
							<fieldset>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">Name:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="name" value="<?php echo $name; ?>" class="form-control input-sm" type="text">
									</div>									
								</div>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">IP Address:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="ipaddress" value="<?php echo $ipaddress; ?>" pattern="((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){3}$" class="form-control input-sm" type="text" placeholder="e.g 127.16.0.1">
									</div>									
								</div>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">Port:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="port" value="<?php echo $port; ?>" class="form-control input-sm" type="number">
									</div>									
								</div>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">Protocol:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="protocol" value="<?php echo $protocol; ?>" class="form-control input-sm" type="text">
									</div>									
								</div>	
								<br>													
							</fieldset>
							<br>
						</div>
						<div id="ifNo_loadBalancer" style="display:none">

						</div>	
						<!--------------------VPN Tunnel---------------------------->

						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Do require VPN tunnel ?</label>
							</div>
							<div class="col col-md-3 col-lg-4" style="padding: 3px">
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:vpnCheck();" name="yesno_vpn" id="yesCheck_vpn" value="yes" required>Yes &nbsp;&nbsp;</label>
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:vpnCheck();" name="yesno_vpn" id="noCheck_vpn" value="no" required>No</label>
							</div>							
						</div>
						<br>							
						<div id="ifYes_vpn" style="display: none">
							<fieldset>
								<div class="row">
									<div class="col col-md-4 col-lg-6 form-group">
										<label class="required" for="tunnelProtocol" type="text" style="margin-top: 10px">Tunneling Protocol type:</label>
										<select id="tunnelProtocol" class="form-control input-sm" name="tunnelProtocol" value="<?php echo $tunnelProtocol; ?>" style="margin-top: 6px">
											<option value="default" disabled selected hidden>--select--</option>
											<option value="IPsec">IPsec</option>
											<option value="PPTP">PPTP / MPPE</option>
											<option value="L2TP">L2TP</option>
										</select>
									</div>
										
								</div>														
							</fieldset>
						</div>
						<div id="ifNo_vpn" style="display:none">

						</div>						
						<hr>

						<!------------------------------------------------>
						
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									<label class="required" for="publicip">Public IPs:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<input id="publicip" class="form-control input-sm" name="publicip" pattern="((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){3}$" value="<?php echo $publicip; ?>" type="text" required/>
								</div>								
							</div>	
							<br>						
						</fieldset>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									<label class="required" for="otherNetwork" type="text">Other network devices / services:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<input id="otherNetwork" class="form-control input-sm" name="othernd" value="<?php echo $othernd; ?>" type="text" required>
								</div>								
							</div>	
							<br>					
						</fieldset>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									<label class="required">Choose CDN Provider:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<select name="cdn" value="<?php echo $cdn; ?>" class="form-control input-sm" onchange='checkvalue(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="cloudFlare">Cloud Flare</option>
										<option value="maxcdn">MAX CDN</option>
										<option value="AWScloudfront">AWS Cloud Front</option>
										<option value="Others">Others</option>
									</select>										
								</div>							
							</div>
							<br>						
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									
								</div>
								<div class="col col-md-3 col-lg-4">									
									<input type="text" name="others" value="<?php echo $others; ?>" class="form-control input-sm" id="CDNprovider" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>							
						</fieldset>
						<br>
						<button type="submit" class="btn btn-success btn-sm" name="save_6" style="margin-top: 8px; float: right">save & Next</button>	
						<button type="button" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>
					</form>					
				</div>	
		</div>	
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
		<script type="text/javascript">

			$("#network").validate({				
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