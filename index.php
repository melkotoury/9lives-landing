<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Ninelives</title>











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




<form class="form-horizontal" action="register.php" method="post" name="form1">
  <fieldset>
    <legend>Ninelives Registration Form</legend>
<!-- Name -->
<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-name">Name</label>
									<input class="form-control" id="float-text-name" type="text" name="name">
								</div>

							</div>
						</div>

						<!-- Mobile -->

<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-mobile">Mobile</label>
									<input class="form-control" id="float-text-mobile" type="number" name="phone">
								</div>
							</div>
						</div>

   						<!-- Email -->

<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-email">Email</label>
									<input class="form-control" id="float-text-email" type="email" name="email">
								</div>
							</div>
						</div>




   						<!-- Discount Code -->

<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text-discount-code">Discount Code
									</label>
									<input class="form-control" id="float-text-discount-code" type="text" name="discount-code">
								</div>
							</div>
						</div>

    <!-- Gender -->
			<div class="form-group">
							<div class="radio radio-adv">
								<label for="input-radio-1">
									<input class="access-hide" id="input-radio-1" name="input-radio" type="radio" name="gender">Male
									<span class="circle"></span><span class="circle-check"></span>
								</label>
							</div>
							<div class="radio radio-adv">
								<label for="input-radio-2">
									<input class="access-hide" id="input-radio-2" name="input-radio" type="radio" name="gender">Female
									<span class="circle"></span><span class="circle-check"></span>
								</label>
							</div>
						
						</div>
   <!-- Age Group -->
    <div class="form-group">
      <label for="select111" class="col-lg-2 control-label">Age</label>

      <div class="col-lg-10">
        <select id="select111" class="form-control">
          <option>15-20</option>
          <option>21-25</option>
          <option>26-30</option>
        </select>
      </div>
    </div>
<!-- Submit or Cancel -->
    	<div class="form-group-btn">
    	<button class="btn waves-attach waves-button" type="button">Clear</button>
						<button class="btn btn-brand-accent waves-attach waves-button waves-light" type="submit">Register</button>
					</div>
  
  </fieldset>
</form>
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
			<p>Copyrights &copy; 2015, Ninelives All Right Reserved </p>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-brand-accent fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Links</span><span class="fbtn-ori icon">add</span><span class="fbtn-sub icon">close</span></a>
			<div class="fbtn-dropdown">
				<a class="fbtn" href="https://plus.google.com" target="_blank"><span class="fbtn-text">Visit Ninelives Google Plus Account</span><span class="fa fa-google-plus"></span></a>
				<a class="fbtn fbtn-blue" href="https://twitter.com/" target="_blank"><span class="fbtn-text">Follow Ninelives on Twitter</span><span class="fa fa-twitter"></span></a>
				<a class="fbtn fbtn-alt" href="http://www.facebook.com.au/" target="_blank"><span class="fbtn-text">Visit Ninelives Facebook Fan Page</span><span class="fa fa-facebook"></span></a>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/base.min.js"></script>

	<!-- js for this project -->
	<script src="js/project.min.js"></script>
</body>
</html>
