<?php
session_start();
include('../connect/connect5.php'); 
include('../connect/config.php'); 


$yesno = $_SESSION['yesno']; //retrieving previous page entity stored as Session Variable

	if (!empty($yesno)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_5'])){		
		$_SESSION['serverRuntime'] = htmlentities($_POST['serverRuntime']);
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
			if(val==="Others")
				document.getElementById('dnsHost_others').style.display='block';
			else
				document.getElementById('dnsHost_others').style.display='none'; 
		}

		function additionalVolumeCheck() {
			if (document.getElementById('yesCheck_additionalVolume').checked) {
				document.getElementById('ifYes_additionalVolume').style.display = null;
				document.getElementById('ifNo_additionalVolume').style.display = 'none';
			} else if (document.getElementById('noCheck_additionalVolume').checked) {
				document.getElementById('ifNo_additionalVolume').style.display = null;
				document.getElementById('ifYes_additionalVolume').style.display = 'none';
			} 
		}

		$tableCtr=1 ;

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
					<li class="active"><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Management</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>	
			------------------------------>		
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
					  <span class="bar active"></span>				  
					  <div class="circle active">
					    <span class="label">1</span>
					    <span class="title">Server</span>
					    <span class="tooltiptext">Server Details</span>
					  </div>	
					  <span class="bar"></span>				  
					  <div class="circle">
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
					    <span class="title">monitoring</span>
					    <span class="tooltiptext">Monitoring</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">11</span>
					    <span class="title">Matrix</span>
					    <span class="tooltiptext">Escalation Matrix</span>
					  </div>						  
					</div>
			<!-----------------------Progress Bar ----------------------->
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success3'])) : ?>
						<div class="alert alert-success" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php 
							echo $_SESSION['success3']; 
							unset($_SESSION['success3']);
							?>					      	
						</div>
					<?php endif ?>
					<form id="server" action="5.php" name="server" method="POST">
						<h3>Server Information Details</h3>
						<br>
						<fieldset>
							<br>							
							<div class="row">
								<div class="col col-md-* col-lg-3">									
									<label class="required">Select required environments: </label>
								</div>
								<div class="col col-md-* col-lg-5">		
									<ul>
										<li><input type="checkbox" name="reqEnv[]" value="production" required>&nbsp;Production</li>
										<li><input type="checkbox" name="reqEnv[]" value="devlopment" required>&nbsp;Development</li>
										<li><input type="checkbox" name="reqEnv[]" value="test" required>&nbsp;Testing</li>
										<li><input type="checkbox" name="reqEnv[]" value="UAT" required>&nbsp;UAT</li>
									</ul>								
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-* col-lg-3">
									<label class="required">Select number of Servers required:</label>
								</div>
								<div class="col col-md-6 col-lg-3">
									<input type="number" class="form-control input-sm" name="numOfServer" id="numOfServer" value="0" min="0" required>									
								</div>							
							</div>
							<br>
						</fieldset>
						<hr>

						<!--------------------Configuration------------------->
						<fieldset>
						<br>
						<div class="table-responsive">
							<table class="table table-bordered table-dark table-striped" id="dynamic_field">
								<thead>
		  							<tr class="bg-primary">								    
									    <th scope="col" style="width: 150px">Required OS</th> 
									    <th scope="col">OS Version</th>
									    <th scope="col">Server Type</th>
									    <th scope="col">Cores(vcpu)</th>
									    <th scope="col">Memory(GB)</th>
									    <th scope="col">Storage(GB)</th>
									    <th scope="col">Number of Server</th>
									    <th scope="col">Add/Remove</th>
									 </tr>
		  						</thead>
								<tr>								
									<td>
										<select id="reqOS" name="reqOS[]" class="form-control input-sm name_list" required>	
											<option value="default" disabled selected hidden>--select--</option>						
											<option value="Windows">Windows</option>
											<option value="Linux">Linux</option>
											<option value="CentOS">CentOS</option>
											<option value="Red Hat">Red Hat</option>
										</select>									
									</td>
									<td><input type="text" name="osVer[]" placeholder="e.g. Version 1.0" class="form-control name_list input-sm" required /></td>									
									<td>
										<select id="serverType" name="serverType[]" class="form-control input-sm name_list" required>
											<option value="default" disabled selected hidden>--select--</option>
											<option value="web server">Web Server</option>
											<option value="proxy server">Proxy Server</option>
											<option value="mail server">Mail Server</option>
											<option value="application server">Application Server</option>
											<option value="real-time communication server">Real-Time Communication Server</option>
											<option value="FTP server">FTP Server</option>
											<option value="collaboration server">Collaboration Server</option>
											<option value="list server">list Server</option>
											<option value="tunnel server">Tunnel Server</option>
											<option value="opensource server">Open Source Server</option>
											<option value="virtual server">Virtual Server</option>
										</select>
									</td>								
									<td><input type="number" name="cores[]" placeholder="e.g. 4" class="form-control name_list input-sm" required /></td>
									<td><input type="number" name="memory[]" placeholder="e.g. 2 (GB)" class="form-control name_list input-sm" required /></td>	
									<td><input type="number" name="storage[]" placeholder="e.g. 500 (GB)" class="form-control name_list input-sm" required /></td>
									<td><input type="number" name="serverNum[]" placeholder="e.g 4" class="form-control name_list input-sm" required /></td>
									<!--------Add Button------->			
									<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
								</tr>
							</table>						
						</div>
						</fieldset>
						<hr>

						<!--------------------Configuration------------------->
						
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required" for="serverRuntime" style="padding: 5px">Server Runtime:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<input type="text" class="form-control input-sm" name="serverRuntime" id="serverRuntime" value="<?php echo $serverRuntime; ?>" placeholder="(eg. 24x7 or Only business hours)" required>						
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required" for="serverRegion">Select Region cloud server to be deployed:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<div class="form-inline">
										<select id="serverRegion" name="serverRegion" class="form-control input-sm" required>
											<option value="default" disabled selected hidden>--select--</option>
											<option value="IN">India</option>
											<option value="Germany">Germany</option>
											<option value="US">US</option>
											<option value="UK">UK</option>
										</select>
										<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="info"></i>							
									</div>									
								</div>										
							</div>																		
						</fieldset>						
						<hr>        				
						<h3>Domain name registration</h3>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required" for="domainName">Type preferred domain name:</label>   							
								</div>
								<div class="col col-md-3 col-lg-4">
									<input type="text" class="form-control input-sm" name="domainName" id="domainName" value="<?php echo $domainName; ?>" placeholder="example.com" required>
								</div>        						
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required" for="dnsHost">Select DNS hosting service provide:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<div class="form-inline">
										<select name="dnsHost" id="dnsHost" class="form-control input-sm" onchange='checkvalue(this.value)' required>
											<option value="default" disabled selected hidden> --select-- </option>
											<option value="GoDaddy">GoDaddy</option>
											<option value="Route53">Route53</option>
											<option value="DNSmadeEasy">DNSmadeEasy</option>
											<option value="Others">Others</option>
										</select> 
										<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="info"></i>       								
									</div>        							
								</div>	        							
							</div>  
							<br>    					
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									
								</div>
								<div class="col col-md-3 col-lg-4">
									<input type="text" class="form-control input-sm" name="dnsHost_others" id="dnsHost_others" placeholder="(required)" style='display:none;'/>
								</div>        						
							</div>        					       					
						</fieldset>
						<br>
						<hr>

						<!---------Storage Details--------->

						<h3>Storage Details</h3>
						<br>
						<fieldset>
							<div class="row">
								<br>
								<div class="col col-md-2 col-lg-3">
									<label class="required" for="storageReq" style="padding-top: 7px">Storage requirement:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<select id="storageReq" name="storageReq" class="form-control input-sm" required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Normal Storage">Normal Storage</option>
										<option value="Magnetic Storage">Magnetic Storage</option>
										<option value="SSD">SSD</option>
										<option value="GSSD">GSSD</option>
										<option value="SSD/PIOPS">SSD PIOPS</option>
									</select>
								</div>	
								<br>						
							</div>
							<br>							
						</fieldset>
						<hr>
						<div class="row">
							<div class="col col-md-2 col-lg-3">
								<label class="required">&nbsp;Is file storage required ?</label>
							</div>
							<div class="col col-md-3 col-lg-4">
								<label class="radio-inline"><input type="radio" name="fileStorage_yesno" id="yesCheck" value="yes" required>Yes</label>
								<label class="radio-inline"><input type="radio" name="fileStorage_yesno" id="noCheck" value="no" required>No</label>
							</div>							
						</div>					
						<hr>
						<div class="row">
							<div class="col col-md-2 col-lg-3">
								<label class="required">&nbsp;Do you require additional volumes ?</label>
							</div>
							<div class="col col-md-3 col-lg-4">									
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:additionalVolumeCheck();" name="additionalVol_yesno" id="yesCheck_additionalVolume" value="yes" required>Yes </label>
								<lable class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:additionalVolumeCheck();" name="additionalVol_yesno" id="noCheck_additionalVolume" value="no" required>No <br>	</lable>						
							</div>													
						</div>	
						<br>																	
						<div id="ifYes_additionalVolume" style="display: none">
							<fieldset>
								<br>
								<div class="row">
									<div class="col col-md-2 col-lg-3">
										<label class="required" for="additionalVol_num" type="text">Number of additional volumes:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="additionalVol_num" name="additionalVol_num"  class="form-control input-sm" type="Number" value="0" min="0" value="<?php echo $additionalVol_num; ?>">
									</div>							
								</div>
								<br>
								<div class="row">
									<div class="col col-md-2 col-lg-3">
										<label class="required" for="additionalVol_size" type="text">Each volume size (GB):</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="additionalVol_size" name="additionalVol_size" class="form-control input-sm" type="text" value="<?php echo $additionalVol_size; ?>">											
									</div>																	
								</div>
								<br>															
							</fieldset>
						</div>
						<br>
						<div id="ifNo_additionalVolume" style="display:none">

						</div>
						<br>	
						<button type="submit" id="submit" class="btn btn-success btn-sm" name="save_5" style="margin-top: 8px; float: right">save & Next</button>		
						<button type="submit" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>	
					</form>
				</div>				
			</div>	
		</div>	
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var tableCtr=1;
				$('#add').click(function(){										
					tableCtr++;
					$('#dynamic_field').append('<tr id="row'+tableCtr+'"><td><select id="reqOS" name="reqOS[]" class="form-control input-sm" required><option value="" disabled selected hidden>--select--</option><option value="Windows">Windows</option><option value="Linux">Linux</option><option value="CentOS">CentOS</option><option value="Red Hat">Red Hat</option></select></td><td><input type="text" name="osVer[]" class="form-control name_list input-sm" required /></td><td><select id="serverType" name="serverType[]" class="form-control input-sm" required><option value="" disabled selected hidden>--select--</option><option value="web server">Web Server</option><option value="proxy server">Proxy Server</option><option value="mail server">Mail Server</option><option value="application server">Application Server</option><option value="real-time communication server">Real-Time Communication Server</option><option value="FTP server">FTP Server</option><option value="collaboration server">Collaboration Server</option><option value="list server">list Server</option><option value="tunnel server">Tunnel Server</option><option value="opensource server">Open Source Server</option><option value="virtual server">Virtual Server</option></select></td><td><input type="number" class="form-control input-sm" name="cores[]" class="form-control name_list" required/></td><td><input type="number" class="form-control input-sm" name="memory[]" class="form-control name_list" required/></td><td><input type="number" class="form-control input-sm" name="storage[]" class="form-control name_list" required/></td><td><input type="number" name="numOfServer[]" placeholder="e.g 4" class="form-control name_list input-sm" required /></td><td><button type="button" name="remove" id="'+tableCtr+'" class="btn btn-danger btn_remove btn-sm">X</button></td></tr>');
				});
				
				$(document).on('click', '.btn_remove', function(){
					var button_id = $(this).attr("id"); 
					$('#row'+button_id+'').remove();					
				});				
				
			});



			$("#server").validate({				
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