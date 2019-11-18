<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include('db.php');?>
				
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <!--       <link href="assets/css/custom-styles.css" rel="stylesheet" />     -->
	<link href="css/style2.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
     <!-- header -->
<div class="banner-top">
		<!-- 	<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@facturacionweb.site">info@facturacionweb.site</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+504 7050-8888</li>	
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> -->
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Palanca de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img  src="https://es.orisonhostels.com//wp-content/uploads/2019/04/logo-orison-hostel-j.png" alt="">
									<!-- <h1><a class="navbar-brand" href="index.php"> Orison <p class="logo_w3l_agile_caption">Hostels</p></a></h1>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Inicio</a></li>
							<li class="menu__item"><a href="#team" class="menu__link "><img  class="alignright"  src="https://orisonhostels.com/wp-content/uploads/2019/04/ubicandose.png">Ubicaion</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Nosotros</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Blog</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">log In</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->

	</div>
	
	 <div class="container">
		 
		 <div class="row">
			 
			 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				 <h1>Rooms</h1>
			 </div>
			 
		 </div>
		 
		 <div class="row">
			 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				 <img src="https://orisonhostels.com/wp-content/uploads/2019/01/Habitacion-Sencilla-Orison-hostel-barata-.jpg" alt="">
			 </div>
			 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				 <h2>Single Room up to 2 People</h2>
				 <p>Intimate, Minimalist and Comfortable, include General Services, Semi Matrimonial Bed, Shared Bathroom, etc

			   </p>
			   <li>The room has a Lavatory with running water.

</li>
			   <li>Shared bathroom.</li>
			   <li>If you prefer we can install a single bed.</li>
				 
			 </div>
		 </div>

		 <div class="row">
			 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				 <img src="https://orisonhostels.com/wp-content/uploads/2019/01/Habitacion-Sencilla-Orison-hostel-barata-.jpg" alt="">
			 </div>
			 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				 <h2>Single Room up to 2 People</h2>
				 <p>Intimate, Minimalist and Comfortable, include General Services, Semi Matrimonial Bed, Shared Bathroom, etc

			   </p>
			   <li>The room has a Lavatory with running water.

</li>
			   <li>Shared bathroom.</li>
			   <li>If you prefer we can install a single bed.</li>
				 
			 </div>
		 </div>
		 
		 

		 
		 <div class="row">
		
		 <?php 
		 $sql ="SELECT * FROM `room` where `type`='Habitación Sencilla'; ";
	$re = mysqli_query($con,$sql);

echo $re->num_rows;
	?>
		 </div>
		 
	 </div>



    <!-- /. WRAPPER  -->
    <!-- -------------------------------------------------------------JS Scripts------------------------------------------------>
    <!-- -------------------------------------------------------jQuery Js ------------------------------------------------------->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>