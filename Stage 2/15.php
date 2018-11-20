<?php

session_start();
include('../connect/connect15.php'); 

$choosepricing = $_SESSION['choosepricing']; //retrieving previous page entity stored as Session Variable

	if (!empty($choosepricing)) {
		# code...
	}
	else {
		session_destroy();
		header('location: ../index.php');
	}

	//storing session variable for next page
	if(isset($_POST['save_15'])){		
		$_SESSION['supportHours'] = htmlentities($_POST['supportHours']);
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
		       document.getElementById('patchTypeOthers').style.display='block';
		    else
		       document.getElementById('patchTypeOthers').style.display='none'; 
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
					  </div>	
					  <span class="bar done"></span>				  
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Server</span>
					  </div>	
					  <span class="bar done"></span>				  
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Network</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Database</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">PaaS</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Security</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Backup</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Identity</span>
					  </div>
					  <span class="bar done"></span>
					  <div class="circle done">
					    <span class="label">✓</span>
					    <span class="title">Pricing</span>
					  </div>
					  <span class="bar active"></span>
					  <div class="circle active">
					    <span class="label">9</span>
					    <span class="title">Support</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">10</span>
					    <span class="title">monitor</span>
					  </div>
					  <span class="bar"></span>
					  <div class="circle">
					    <span class="label">11</span>
					    <span class="title">Matrix</span>
					  </div>						  
					</div>
			<!-----------------------Progress Bar ----------------------->
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success14'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>					      	
					          <?php 
					          	echo $_SESSION['success14']; 
					          	unset($_SESSION['success14']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="support" action="15.php" method="POST">						
						<h3>Support Operations</h3>
						<br>
						<fieldset>
							<br>
							<div class="row">								
								<div class="col col-mid-3 col-lg-3">
									<label class="required">Support Hours:</label>
								</div>
								<div class="col col-mid-3 col-lg-4">
									<select name="supportHours" class="form-control input-sm" onchange='checkvalue(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>						
										<option value="24x5">24x5</option>		
										<option value="24x7">24x7</option>
										<option value="8x5">8x5</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="col col-mid-3 col-lg-4 form-group">
										
								</div>													
								<div class="col col-mid-3 col-lg-4 form-group" style='display:none;'>		
									<input type="number" class="form-control input-sm" name="supportHours" value="<?php echo $supportHours; ?>" id="supportHours" min="0" max="24" placeholder="hours" required />
								</div>													  								
							</div>							
							<div class="row">
								<div class="col col-mid-3 col-lg-3 form-group">
									<label class="required">Select Time Zone:</label>
								</div>
								<div class="col col-mid-4 col-lg-4 form-group">
									<select name="timeZone" id="timezone" class="form-control input-sm" required>
										<option value="default" disabled selected hidden>--select--</option>
										<option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="International Date Line West">(GMT-12:00) International Date Line West</option>
										<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="Midway Island, Samoa">(GMT-11:00) Midway Island, Samoa</option>
										<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="Hawaii">(GMT-10:00) Hawaii</option>
										<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="Alaska">(GMT-09:00) Alaska</option>
										<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
										<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="Tijuana, Baja California">(GMT-08:00) Tijuana, Baja California</option>
										<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="Arizona">(GMT-07:00) Arizona</option>
										<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="Chihuahua, La Paz, Mazatlan">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
										<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
										<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="Central America">(GMT-06:00) Central America</option>
										<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="Central Time (US & Canada)">(GMT-06:00) Central Time (US & Canada)</option>
										<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="Guadalajara, Mexico City, Monterrey">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
										<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
										<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="Bogota, Lima, Quito, Rio Branco">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
										<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="Eastern Time (US & Canada)">(GMT-05:00) Eastern Time (US & Canada)</option>
										<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
										<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Atlantic Time (Canada)">(GMT-04:00) Atlantic Time (Canada)</option>
										<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="Caracas, La Paz">(GMT-04:00) Caracas, La Paz</option>
										<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="Manaus">(GMT-04:00) Manaus</option>
										<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Santiago">(GMT-04:00) Santiago</option>
										<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="Newfoundland">(GMT-03:30) Newfoundland</option>
										<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Brasilia">(GMT-03:00) Brasilia</option>
										<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="Buenos Aires, Georgetown">(GMT-03:00) Buenos Aires, Georgetown</option>
										<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Greenland">(GMT-03:00) Greenland</option>
										<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Montevideo">(GMT-03:00) Montevideo</option>
										<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
										<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="Cape Verde Is">(GMT-01:00) Cape Verde Is.</option>
										<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="Azores">(GMT-01:00) Azores</option>
										<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="Casablanca, Monrovia, Reykjavik">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
										<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
										<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
										<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Belgrade, Bratislava, Budapest, Ljubljana, Prague">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
										<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Brussels, Copenhagen, Madrid, Paris">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
										<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Sarajevo, Skopje, Warsaw, Zagreb">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
										<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="West Central Africa">(GMT+01:00) West Central Africa</option>
										<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Amman">(GMT+02:00) Amman</option>
										<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Athens, Bucharest, Istanbul">(GMT+02:00) Athens, Bucharest, Istanbul</option>
										<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Beirut">(GMT+02:00) Beirut</option>
										<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Cairo">(GMT+02:00) Cairo</option>
										<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="Harare, Pretoria">(GMT+02:00) Harare, Pretoria</option>
										<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value=" Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
										<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Jerusalem">(GMT+02:00) Jerusalem</option>
										<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Minsk">(GMT+02:00) Minsk</option>
										<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Windhoek">(GMT+02:00) Windhoek</option>
										<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="Kuwait, Riyadh, Baghdad">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
										<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="Moscow, St. Petersburg, Volgograd">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
										<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="Nairobi">(GMT+03:00) Nairobi</option>
										<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="Tbilisi">(GMT+03:00) Tbilisi</option>
										<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="Tehran">(GMT+03:30) Tehran</option>
										<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="Abu Dhabi, Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
										<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="Baku">(GMT+04:00) Baku</option>
										<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="Yerevan">(GMT+04:00) Yerevan</option>
										<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="Kabul">(GMT+04:30) Kabul</option>
										<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
										<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="Islamabad, Karachi, Tashkent">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
										<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="Sri Jayawardenapura">(GMT+05:30) Sri Jayawardenapura</option>
										<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="Chennai, Kolkata, Mumbai, New Delhi">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
										<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="Kathmandu">(GMT+05:45) Kathmandu</option>
										<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="Almaty, Novosibirsk">(GMT+06:00) Almaty, Novosibirsk</option>
										<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="Astana, Dhaka">(GMT+06:00) Astana, Dhaka</option>
										<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="Yangon (Rangoon)">(GMT+06:30) Yangon (Rangoon)</option>
										<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="Bangkok, Hanoi, Jakarta">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
										<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
										<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Beijing, Chongqing, Hong Kong, Urumqi">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
										<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Kuala Lumpur, Singapore">(GMT+08:00) Kuala Lumpur, Singapore</option>
										<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Irkutsk, Ulaan Bataar">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
										<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Perth">(GMT+08:00) Perth</option>
										<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Taipei">(GMT+08:00) Taipei</option>
										<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Osaka, Sapporo, Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
										<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Seoul">(GMT+09:00) Seoul</option>
										<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="Yakutsk">(GMT+09:00) Yakutsk</option>
										<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Adelaide">(GMT+09:30) Adelaide</option>
										<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Darwin">(GMT+09:30) Darwin</option>
										<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="Brisbane">(GMT+10:00) Brisbane</option>
										<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="Canberra, Melbourne, Sydney">(GMT+10:00) Canberra, Melbourne, Sydney</option>
										<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="Hobart">(GMT+10:00) Hobart</option>
										<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="Guam, Port Moresby">(GMT+10:00) Guam, Port Moresby</option>
										<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="Vladivostok">(GMT+10:00) Vladivostok</option>
										<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="Magadan, Solomon Is., New Caledonia">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
										<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="Auckland, Wellington">(GMT+12:00) Auckland, Wellington</option>
										<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="Fiji, Kamchatka, Marshall Is">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
										<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
									</select>	
								</div>							
							</div>							
							<div class="row">
								<div class="col col-mid-3 col-lg-3 form-group">
									<label class="required">Service Level Agreement:</label>
								</div>
								<div class="col col-mid-3 col-lg-4 form-group">
									<select id="sla" name="sla" class="form-control input-sm" required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="gold">Gold</option>
										<option value="silver">Silver</option>
										<option value="bronze">Bronze</option>
									</select>
									<br>
									
								</div>							
							</div>	
							<div class="row">
								<div class="col col-mid-4 col-lg-4 form-group">
									<p>
										1. <b>Gold schedule:</b> 24×7<br>
										2. <b>Silver:</b>  16×7 (16 hours every day)<br>
										3. <b>Bronze:</b> 10×5 (10 hours Monday to Friday)
									</p>
									<p>
										<span style="color: red">*Note:</span><br> Gold level the most restrictive and demanding in their response and resolution times.
										<br>The Bronze level, has the least demanding response and resolution times.
									</p>
								</div>
							</div>						
						</fieldset>
						<br>
						<hr>
						<h4>Maintenance Window</h4>
						<fieldset>
							<div class="row">
								<br>
								<div class="col col-mid-3 col-lg-2 form-group">
									<label class="required">Recurrence</label>
								</div>
								<div class="col col-mid-3 col-lg-2 form-group">
									<select id="recurrence" name="recurrence" class="form-control input-sm" required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Weekly">Weekly</option>
										<option value="Monthly">Monthly</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="col col-mid-3 col-lg-2 form-group">
									<label class="required" for="Date">Select Day</label>
								</div>
								<div class="col col-mid-3 col-lg-2 form-group">									
									<select id="fromDay" name="fromDay" class="form-control input-sm" value="<?php echo $fromDay; ?>" required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Sunday">Sunday</option>
										<option value="Monday">Monday</option>
										<option value="Tuesday">Tuesday</option>
										<option value="Wednesday">Wednesday</option>
										<option value="Thursday">Thursday</option>
										<option value="Friday">Friday</option>
										<option value="Saturday">Saturday</option>										
									</select>	
								</div>																
							</div>
							<div class="row">
								<div class="col col-mid-3 col-lg-2 form-group">
									<label class="required" for="fromTime">From:</label>
								</div>
								<div>
									<div class="col col-mid-3 col-lg-2 form-group">
										<input id="fromTime" name="fromTime" type="Time" class="form-control input-sm" value="<?php echo $fromTime; ?>" required>
									</div>
								</div>
								<div>
									<div class="col col-mid-3 col-lg-2 form-group">
										
									</div>
								</div>
								<div class="col col-mid-1 col-lg-1 form-group">
									<label class="required" for="Date">Until:</label>
								</div>
								<div class="col col-mid-2 col-lg-2 form-group">
									<input type="Date" id="untilDate" name="untilDate" class="form-control input-sm" min="<?php echo $untilDate; ?>" value="<?php echo $untilDate; ?>" required>
								</div>
								<div class="col col-mid-3 col-lg-2 form-group">
									<input type="Time" id="untilTime" name="untilTime" class="form-control input-sm" value="<?php echo $untilTime; ?>" required>
								</div>	
							</div>							
						</fieldset>
						<br>
						<label>Additional Information:</label>											
						<fieldset>
							<br>							
							<textarea class="form-control input-sm" name="addInformation" minlength="20" value="<?php echo $addInformation; ?>" rows="5" id="comment" placeholder="(Optional)"></textarea>	
							<br>					
						</fieldset>
						<br>		
						<fieldset>
							<br>
							<div class="row">															
								<div class="col col-mid-4 col-lg-3 form-group">
									<label class="required">Patch Type:</label>
								</div>
								<div class="col col-mid-4 col-lg-3 form-group">
									<select name="patchType" id="patchType" class="form-control input-sm" onchange='checkvalue(this.value)' required>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Embroidered Patches">Embroidered Patches</option>
										<option value="Woven Patches">Woven Patches</option>
										<option value="Custom PVC Patches">Custom PVC Patches</option>
										<option value="Others">Others</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="col col-mid-4 col-lg-3 form-group">
									
								</div>
								<div class="col col-mid-4 col-lg-3 form-group">
									<input type="text" class="form-control input-sm" name="patchTypeOthers" value="<?php echo $patchTypeOthers; ?>" id="patchTypeOthers" placeholder="(others)" style='display:none;' required /> 									
								</div>								
						</div>
						</fieldset>
						<br>	
						<button type="submit" class="btn btn-success btn-sm" name="save_15" style="margin-top: 8px; float: right">save & Next</button>	
						<button type="button" class="btn btn-primary btn-sm" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger btn-sm" style="margin-top: 8px">Cancel</button>	
					</form>				
				</div>		
		</div>	
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2.js"></script>
		<script type="text/javascript">

			$("#support").validate({				
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