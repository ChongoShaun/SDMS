<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="School Directory for Chicago Public Schools">
    <meta name="author" content="Chicago Public Schools">
    <title>SDMS Mockups</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/sdms_style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
  	<?php include_once("assets/images/icons/svg-defs.svg"); ?>
  	<div class="container-fluid">
  		<div class="nav nav-utility top"></div>
  		<div class="nav nav-main top"></div>
  	</div>
     
    <div class="container main-content">
		<div class="row">
			<div class="col-sm-3 logo"><img src="assets/images/logos/logo_cps_large.png" alt="CPS Logo" class="img-responsive"></div>
			<div class="col-sm-9 intro">
				<h1>School Directory Mockups</h1>
				<p>User menu below to view mockup.</p>
				<p>
					<a href="home.php">Home</a>
				</p>
				<p>
					<a href="filter-result.php">Filtered Result (Category)</a>
				</p>
				<p>
					<a href="school-view.php">School View</a>
				</p>
			</div>
		</div>
    </div>
    
	<div class="container-fluid">
  		<div class="footer footer-utility"></div>
  		<div class="footer footer-main">
	  		
	  		© 2015 Chicago Public Schools  |  Privacy Policy  |  Legal  |  Site Version 1.0  |  Server XYZ
	  		
  		</div>
		
	</div>
     
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/all.min.js"></script>

  <script type="text/javascript">
	  
	  $(window).bind('load', function() {
	  	if ($(this).width() < 767) {
	  		$('#collapse-content').removeClass('in');
	  		$('#collapse-content').addClass('out');
	  	} else {
	  		$('#collapse-content').removeClass('out');
	  		$('#collapse-content').addClass('in');
	  	}
	  });
	  
	  	  
  </script>

  </body>
</html>
