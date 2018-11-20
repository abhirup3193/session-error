<?php
session_start();

include('../connect/connect2.php');

$organization = $_SESSION['organization'];//retrieving previous page entity stored as Session Variable

	if (!empty($organization)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_2'])){		
		$_SESSION['migrate'] = htmlentities($_POST['migrate']);
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
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png" />

	<script type="text/javascript">				
		function yesnoCheck() {
			if (document.getElementById('yesCheck').checked) {
				document.getElementById('ifYes').style.display = null;				
			} else {
				document.getElementById('ifYes').style.display = 'none';				
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
		<!----------------------------------
		<div class="sidebar">
			<div class="logo"><img src="img/logo.png"></div>
			<ul>
				<li><a href="1.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Requester Information</a></li>
				<li class="active"><a href="2.php"><i class="fas fa-poll-h"></i>&nbsp;&nbsp;&nbsp;Strategy</a></li>
				<li><a href="3.php"><i class="fas fa-cloud"></i>&nbsp;&nbsp;Cloud Service Provider</a></li>
				
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
					    <span class="title">Basic</span>
					    <span class="tooltiptext">Basic Information</span>					    
					  </div>	
					  <span class="bar active"></span>				  
					  <div class="circle active">
					    <span class="label">2</span>
					    <span class="title">Strategy</span>
					    <span class="tooltiptext">Strategy</span>
					  </div>	
					  <span class="bar"></span>				  
					  <div class="circle">
					    <span class="label">3</span>
					    <span class="title">Service</span>
					    <span class="tooltiptext">Service Provider</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">4</span>
					    <span class="title">Stage 2</span>
					    <span class="tooltiptext">To Stage 2</span>
					  </div>					  
					</div>
		<!-----------------------Progress Bar ----------------------->
		<div class="main">							  	
			<div class="content">			
						<?php if (isset($_SESSION['success1'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>					      	
					          <?php 
					          	echo $_SESSION['success1'];				          	
					          ?>					      	
					      </div>
						<?php endif ?>						
						<form id="strategy" action="2.php" method="POST">							
							<h3>Strategy</h3>
							<br>
							<h5>Answer the following questions for more understanding about the project</h5>
							<fieldset>
								<div class="row">        						
	        						<br>
	        						<div class="col col-lg-12 col-md-12">
	        							<div class="form-group">
	        								<label class="required">Why you want to migrate to the cloud?</label>
											<textarea name="migrate" class="form-control input-sm" rows="5" minlength="50" required><?php echo $migrate; ?></textarea><br>
	        							</div>
	        						</div>
	        						<div class="col col-lg-12 col-md-12">
	        							<div class="form-group">
	        								<label class="required">Short, Medium and Long term growth plans in cloud?</label>
											<textarea name="plans" class="form-control input-sm" rows="5" minlength="20" required></textarea><br>
	        							</div>
	        						</div>
	        					</div>											
							</fieldset>
							<br>
							<label for="yes_no_radio" class="required">Do you have any virtualization technology deployed currently?</label>							
								Yes <input type="radio" class="radioBtn" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="yes" required> &nbsp;&nbsp;		
								No <input type="radio" class="radioBtn" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="no" required><br>					
								<br>
							<div id="ifYes" style="display:none">
									<fieldset>										
										<label>Description</label><br>
										<textarea name="virtualization" class="form-control input-sm" rows="5" minlength="30" placeholder="On-premise, Cloud or Hybrid  (Provide Short Description)"></textarea><br>										
									</fieldset>
							</div>
							<br>
							<button type="submit" class="btn btn-success btm-sm" name="save_2" style="margin-top: 8px; float: right">save & Next</button>
							<button type="button" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
							<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>
					</form>
			</div>			
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
	<script type="text/javascript">

			$("#basicInfo").validate({				
		    	focusInvalid: false,
			    invalidHandler: function(form, validator) {			        
			        if (!validator.numberOfInvalids())
			            return;			        
			        $('html, body').animate({
			            scrollTop: $(validator.errorList[0].element).offset().top-300
			        }, 500);		        
			    }
			});
		
			$("#strategy").validate({				
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