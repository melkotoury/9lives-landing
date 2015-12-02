<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">



<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


	<title>Ninelives</title>








	<link href="css/bootstrap-material-design.min.css" rel="stylesheet">



	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">

	<!-- css for this project -->
	<link href="css/project.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="avoid-fout page-brand">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header header-transparent header-waterfall">
		<ul class="nav nav-list pull-left">
			
		</ul>
		<div class="header-affix-hide pull-left" data-offset-top="108" data-spy="affix">
			<a class="header-logo margin-left-no" href="index.html"></a>
		</div>
		<div class="header-affix pull-left" data-offset-top="108" data-spy="affix">
			<span class="header-logo margin-left-no"><img src="img/banner.png" style="width:160px  " style="height:180px" style="display: block"style="margin-left: auto"
   style="margin-right: auto" > </span>
			
		</div>
		
	</header>
	
	
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading"><img src="img/banner.png" style="width:240px  " style="height:180px" style="display: block"style="margin-left: auto"
   style="margin-right: auto" ></h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner">



<div class="row"><!--Start Row -->
	<div class="col-md-8"><!--Registration Column -->
<form id="myForm" class="form-horizontal" action="register.php" method="post" name="form1">
  <fieldset>
    <legend>Ninelives Registration Form</legend>
<!-- Name -->
<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-name">Name</label>
									<input class="form-control" id="float-text-name" type="text" name="name" required>
								</div>

							</div>
						</div>

						<!-- Mobile -->

<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-mobile">Mobile</label>
									<input class="form-control" id="float-text-mobile" type="number" name="phone" required>
								</div>
							</div>
						</div>

   						<!-- Email -->

<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-email">Email</label>
									<input class="form-control" id="float-text-email" type="email" name="email" required>
								</div>
							</div>
						</div>




   						<!-- Discount Code -->

<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-discount-code">Discount Code (Optional)
									</label>
									<input class="form-control" id="float-text-discount-code" type="text" name="discount-code">
								</div>
							</div>
						</div>

    <!-- Gender -->
			<div class="form-group">
			Gender (Optional) <br>
							<div class="radio radio-adv">
								<label for="input-radio-1">
									<input class="access-hide" id="input-radio-1" value="male" type="radio" name="gender">Male
									<span class="circle"></span><span class="circle-check"></span>
								</label>
							</div>
							<div class="radio radio-adv">
								<label for="input-radio-2">
									<input class="access-hide" id="input-radio-2" value="female" type="radio" name="gender">Female
									<span class="circle"></span><span class="circle-check"></span>
								</label>
							</div>
						
						</div>
   <!-- Age Group -->
    <div class="form-group">
      <label for="select111" class="col-lg-2 control-label">Age (Optional)</label>

      <div class="col-lg-10">
        <select id="select111" class="form-control" name="age-group" onchange="window.getStates()">
			<option value="0" name="age" disabled>Select Your Age Group</option>
			<option value="1" name="age">15-20</option>
          <option value="2" name="age">21-25</option>
          <option value="3" name="age">26-30</option>
          <option value="4"name="age">30-40</option>
			<option value="5"name="age">50+</option>
        </select>
      </div>
    </div>
<!-- Submit or Cancel -->
    	<div class="form-group-btn">
    	<button class="btn waves-attach waves-button" type="button" onclick="myFunction()">Clear</button>
						<button class="btn btn-brand-accent waves-attach waves-button waves-light" type="submit">Register</button>
					</div>
  
  </fieldset>
</form>
	</div><!--End Registration Column -->
	<div class="col-md-4"><!--Start Message Column -->
		<div class="jumbotron">
			<h1>Welcome To 9livesprints</h1>

			<p>You have the passion to design your own t-shirt, mugs, giveaways or buiness card, but maybe you don't know how or where to start? Ninelives is here for you! Find your favorite photo , design , image or even create your own design and upload it to one of our many templates and live the artistic experience of producing the product of your passion. You can even add your own text to craft a message for the whole world to see. Start from scratch to make your own or personalize an existing design found in our marketplace. With numerous styles, sizes, and colors, your choices are almost endless! Customize it for yourself, or create one as a gift.</p>

		</div>
	</div><!--End Message Column -->
</div><!--End Row -->
<div style="text-align:center">
	<?php 
	if (isset($_GET['msg'])) {
		$message=$_GET['msg'];
		if($message==1){
			echo "<span style='color:green'> Your entry has been successfully stored</span>";
		}
	}
	?>
</div>



			</section>
		</div> <!-- Eng Container -->
	</div>
	<footer class="footer">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
			<p>Copyrights &copy; 2015, Ninelives All Right Reserved </p>
			</div>
			<div class="col-md-6">
			<p>Developed By <a href="http://rootcave.com" target="_blank">Root Cave</a>
			</p></div>
			</div>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-brand-accent fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Links</span><span class="fbtn-ori icon">add</span><span class="fbtn-sub icon">close</span></a>
			<div class="fbtn-dropdown">
				<a class="fbtn" href="https://instagram.com/9livesprints" target="_blank"><span class="fbtn-text">Visit 9livesprints Instagram Account</span><span class="fa fa-instagram"></span></a>
				<a class="fbtn fbtn-blue" href="https://twitter.com/9livesprints" target="_blank"><span class="fbtn-text">Follow 9livesprints on Twitter</span><span class="fa fa-twitter"></span></a>
				<a class="fbtn fbtn-alt" href="http://www.facebook.com/9livesprints" target="_blank"><span class="fbtn-text">Visit 9livesprints Facebook Fan Page</span><span class="fa fa-facebook"></span></a>
			</div>
		</div>
	</div>
	<script>
		function myFunction() {
			document.getElementById("myForm").reset();
		}
	</script>
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/material.min.js"></script>
	<script src="js/base.min.js"></script>

	<!-- js for this project -->
	<script src="js/project.min.js"></script>
</body>
</html>
