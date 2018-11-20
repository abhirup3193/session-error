<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="../web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
	
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png"/>
	<title>Print</title>

	<script type="text/javascript">    	
		window.setTimeout(function() {
		    $(".alert").fadeTo(500, 0).slideUp(500, function(){
		        $(this).remove(); 
		    });
		}, 4000);
    </script>
</head>
<body>
	<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success16'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<inpput type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;>					      	
					          <?php 
					          	echo $_SESSION['success16']; 
					          	unset($_SESSION['success16']);
					          ?>					      	
					      </div>
					<?php endif ?>	
	<h3>Success !!</h3>
	<p>Form Data Submitted Successfully</p><br>
	<a href="../index.php" type="button" role="button">Exit</a>
</div>
</div>

</body>
</html>