<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://unpkg.com/css-grid@1.0.6/css/css-grid.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

	<title>Welcome to RBEI Cloud Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/bosch.png"/>

	<style type="text/css">
		@media screen and (min-width: 1260px){
			.wrapper{
				display: grid;
				grid-template-columns: 1fr 1fr;
			}

			.nested{
				display: grid;
				grid-template-columns: 1fr 1fr;			
			}	
		}	

		@media screen and (max-width: 1260px)
		{
			.wrapper{
				display: grid;				
			}

			.nested{
				display: grid;
				grid-template-columns: 1fr 1fr;
				grid-gap: 2em;
			}
		} 

		@media screen and (max-width: 760px)
		{
			.wrapper{
				display: grid;				
			}

			.nested{
				display: grid;
				grid-template-columns: 1fr;				
			}
		} 
	</style>
</head>
<body background="img/background.png" style="background-size: contain; background-repeat: no-repeat;">	
	<div class="container-fluid fill-height">
		<div class="header">
			<div class="ribbon"><img src="img/bosch_ribbon.png"></div>
			<div class="navbar">
				<div class="row justify-content-between"> 
					<div class="col-4">
						<div class="logo">
							<img class="navbar-brand" src="img/logo.png">
						</div>
					</div>							
				</div>																								
			</div>														
		</div>		
		<div class="main">
			<div class="content">				
					<div class="wrapper">
						<div class="welcome">
							<br>
							<h2 style="font-size: 54px"><b>Welcome</b> to</h2>
							<h3 style="font-size: 30px"><span style="color: red">RBEI</span> Cloud Customer Service Request Portal</h3><br>
						</div>
						<div class="nested">
							<div class="box">
									<a href="Stage 1/1.php">
										<div class="icon "><i class="fa fa-user" aria-hidden="true"></i></div>
										<div class="description">
											<h3>New User</h3><br>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi odit quisquam</p>	
										</div>
									</a>			
							</div>							
							<div class="box">
								<a href="">
									<div class="icon "><i class="fa fa-user-cog" aria-hidden="true"></i></div>
									<div class="description">
										<h3>Existing User</h3><br>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi odit quisquam</p>
									</div>
								</a>			
							</div>											
							<div class="box">
									<a href="">
										<div class="icon "><i class="fa fa-toolbox" aria-hidden="true"> </i></div>
										<div class="description">
											<h3>Tool Box</h3><br>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi odit quisquam</p>	
										</div>
									</a>			
							</div>
							<div class="box">
									<a href="">
										<div class="icon "><i class="fa fa-search" aria-hidden="true"></i></div>
										<div class="description">
											<h3>Search</h3><br>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi odit quisquam</p>
										</div>
									</a>			
							</div>							
						</div>					
					</div>		
			</div>		
		</div>
	<br>
	<br>
			
</div>
</body>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
		<div class="footer-copyright text-center py-3 copyright"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
		<div class="bottom_ribbon"><img src="img/bosch_ribbon.png"></div>

</footer>
<!-- Footer -->


</html>