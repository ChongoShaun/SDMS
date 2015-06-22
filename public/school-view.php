<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="School Directory for Chicago Public Schools">
    <meta name="author" content="Chicago Public Schools">
    <title>SDMS</title>
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
     
    <div class="container header-content">
		<div class="row">
			<div class="col-sm-3 logo"><img src="assets/images/logos/logo_cps_large.png" alt="CPS Logo" class="img-responsive"></div>
			<div class="col-sm-9 intro">
				<h1>Schools Directory</h1>
			</div>
		</div>
    </div>
    
	<div class="container-fluid mobile-menu visible-xs">
   		<div class="row">
	        <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#collapse-content">
				<i class="fa fa-bars fa-2x"></i><br />
				<span>MENU</span>
	        </button>
		</div>
	</div>
    
    <div class="container main-content">
		<div class="panel-group collapse in" id="collapse-content">
		    <div class="panel">
				<div class="row">
					<div class="col-xs-12 col-md-6">
			            <div id="search-input">
							<form role="search" action="" method="POST" id="search-form" name="search-form">
				                <div class="input-group">
				                    <input type="text" class="form-control input-lg" placeholder="SEARCH" />
				                    <span class="input-group-btn">
				                        <button class="btn btn-info btn-lg" type="submit">
				                            <i class="fa fa-search fa-2x"></i>
				                        </button>
				                    </span>
				                </div>
							</form>
			            </div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div id="browse-button">
							<button class="btn btn-default btn-lg btn-block" type="button">
								BROWSE SCHOOLS
							</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel-group" id="category-panel">
						    <div class="panel panel-default">
						        <div class="panel-heading">
						            <h4 class="panel-title">
								        <a data-toggle="collapse" data-target="#category-body" class="collapsed">
										   Categories
								    	</a>
								    	<span class="hidden-xs">Click on any category to view school results for that category</span>
								    </h4>
						        </div>
						        <div id="category-body" class="panel-collapse collapse" data-toggle="false">
						            <div class="panel-body">
										<div class="col-sm-4 category-column">
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading icon icon-icon_schools">SCHOOLS
													<ul class="list-unstyled">
														<li><a href="#">School name (short)</a></li>
														<li><a href="#">School long name (board approved)</a></li>
													</ul>
												</li>
										        <li class="list-group-item-heading">CONTACT INFORMATION
													<ul class="list-unstyled">
												        <li class="icon icon-icon_phonenumber"><a href="#">Phone number</a></li>
												        <li class="icon icon-icon_faxnumber"><a href="#">Fax number</a></li>
												        <li class="icon icon-icon_website"><a href="#">Website URL</a></li>
												        <li class="icon icon-icon_principalname"><a href="#">Principal Name</a></li>
											        </ul>
										        </li>
										    </ul>
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading">ADDRESSES
													<ul class="list-unstyled">
														<li class="icon icon-icon_schooladdress"><a href="#">School Address (Unit Address)</a></li>
												        <li class="icon icon-icon_deliveryaddress"><a href="#">Delivery address (Ship to Address) </a></li>
												        <li class="icon icon-icon_mailrun"><a href="#">Mail run designations and/or routes - GSR</a></li>
												        <li class="icon icon-icon_busdrop">
												        	<a href="#">Bus drop-off address</a><br />
												        	<a href="#">Bus pick-up address</a>
												        </li>
													</ul>										
												</li>
										    </ul>
										</div>
		
										<div class="col-sm-4 category-column">
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading icon icon-icon_identification">IDENTIFICATION
													<ul class="list-unstyled">
														<li><a href="#">Oracle Unit # &ldquo;Financial Unit ID&rdquo;</a></li>
												        <li><a href="#">Facility ID</a></li>
												        <li><a href="#">School ID</a></li>
												        <li><a href="#">ISBE ID</a></li>
												        <li><a href="#">NCES ID</a></li>
												        <li><a href="#">Legacy ID</a></li>
													</ul>										
												</li>
										    </ul>
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading">INFORMATION
													<ul class="list-unstyled">
														<li class="icon icon-icon_governance"><a href="#">Governance</a></li>
												        <li class="icon icon-icon_network"><a href="#">Network</a></li>
												        <li class="icon icon-icon_gradecategory">
												        	<a href="#">Grade Category (Primary)</a><br />
															<a href="#">Grade Category (Secondary)</a>
														</li>
												        <li class="icon icon-icon_gradesserved">
												        	<a href="#">Current Grades Served</a><br />
															<a href="#">Subsequent Grades Served</a><br />
															<a href="#">Grades Served at Maturity</a>
														</li>
												        <li class="icon icon-icon_coreinstructfunding"><a href="#">Core Instruction Funding</a></li>
												        <li class="icon icon-icon_replicating"><a href="#">Replicating (Charters Only)</a></li>
													</ul>										
												</li>
										    </ul>
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading icon icon-icon_programs">PROGRAMS</li>
											</ul>
										</div>
										
										<div class="col-sm-4 category-column">
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading">FACILITIES
													<ul class="list-unstyled">
														<li class="icon icon-icon_facilityaddress"><a href="#">Facility address</a></li>
														<li class="icon icon-icon_swimmingpool"><a href="#">Swimming Pool</a></li>
														<li class="icon icon-icon_stadium"><a href="#">Stadium</a></li>
														<li class="icon icon-icon_cookingkitchen"><a href="#">Cooking Kitchen</a></li>
														<li class="icon icon-icon_warmingkitchen"><a href="#">Warming Kitchen</a></li>
														<li class="icon icon-icon_airconditioning"><a href="#">Air Conditioning </a></li>
														<li class="icon icon-icon_ADA"><a href="#">ADA</a></li>
														<li class="icon icon-icon_playgrounds"><a href="#">Play Grounds</a></li>
														<li class="icon icon-icon_coshare"><a href="#">Co-Share</a></li>
													</ul>
												</li>
											</ul>
										   	<ul class="list-group list-unstyled">
												<li class="list-group-item-heading">FACILITY SERVICES
													<ul class="list-unstyled">
														<li class="icon icon-icon_maintenance"><a href="#">Maintenance</a></li>
														<li class="icon icon-icon_informationtechnology"><a href="#">Information and Technology</a></li>
														<li class="icon icon-icon_security"><a href="#">Security Services Personnel</a></li>
														<li class="icon icon-icon_utilities"><a href="#">Utilities</a></li>
														<li class="icon icon-icon_foodservices"><a href="#">Food Services</a></li>
													</ul>
												</li>
											</ul>
										</div>
							        </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis malesuada elit a placerat. Integer tellus metus, dictum eu rhoncus et, consequat a elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
		</div>
		<div class="col-xs-12">
			<div class="panel-group" id="school-panel">
			    <div class="panel panel-default">
			        <div class="panel-heading">
			            <h1 class="panel-title">
					        <a data-toggle="collapse" data-target="#school-body">
							   SCHOOL NAME
					    	</a>
					    </h4>
			        </div>
			        <div id="school-body" class="panel-collapse collapse in" data-toggle="false">
			            <div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<ul class="list-group list-unstyled">
										<li>
											Website URL:<br />
											<span>www.schoolwebsite.org</span>
										</li>
										<li>
											School name (short):<br />
											<span>XYZ High School</span>
										</li>
										<li>
											School long name (board approved):<br />
											<span>XYZ High School of Chicago</span>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="list-group list-unstyled">
										<li>
											Phone number:<br />
											<span>312-123-4567</span>
										</li>
										<li>
											Fax number:<br />
											<span>312-123-4567</span>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="list-group list-unstyled">
										<li>
											Principal Name:<br />
											<span>Jane Smith</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<ul class="list-group list-unstyled">
										<li class="list-group-item-heading">Addresses</li>
										<li>
											School Address (Unit Address)<br />
											<span>123 Main Street<br />
											Chicago, IL 60606</span>
										</li>
										<li>
											Delivery address (Ship to Address):<br />
											<span>123 Main Street<br />
											Chicago, IL 60606</span>
										</li>
										<li>
											Mail run designations and/or routes - GSR:<br />
											<span>Main Run 1</span>
										</li>
										<li>
											Bus drop-off address:<br />
											<span>123 Main Street
											Chicago, IL 60606</span>
										</li>
										<li>
											Bus pick-up address:<br />
											<span>123 Main Street<br />
											Chicago, IL 60606</span>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="list-group list-unstyled">
										<li class="list-group-item-heading">Identification</li>
										<li>
											School ID:<br />
											<span>123456</span>
										</li>
										<li>
											ISBE ID:<br />
											<span>123-456-789</span>
										</li>
										<li>
											NCES ID:<br />
											<span>123-456-789</span>
										</li>
										<li>
											Legacy ID:<br />
											<span>1234</span>
										</li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="list-group list-unstyled">
										<li class="list-group-item-heading">Information</li>
										<li>
											Governance:<br />
											<span>Governance</span>
										</li>
										<li>
											Network:<br />
											<span>Network 2</span>
										</li>
										<li>
											Grade Category (Primary):<br />
											<span>K-12</span>
										</li>
										<li>
											Grade Category (Secondary):<br />
											<span>K-12</span>
										</li>
										<li>
											Current Grades Served:<br />
											<span>K-12</span>
										</li>
										<li>
											Subsequent Grades Served:<br />
											<span>K-12</span>
										</li>
										<li>
											Grades Served at Maturity:<br />
											<span>K-12</span>
										</li>
										<li>
											Core Instruction Funding:<br />
											<span>CI Funding</span>
										</li>
										<li>
											Replicating (Charters Only):<br/>
											<span>Replicating</span>
										</li>
									</ul>				
								</div>
							</div>
			            </div>
			        </div>
			    </div>
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
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

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
