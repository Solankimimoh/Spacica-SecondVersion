<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Spacica | Contact</title>

	<meta name="keywords" content="">
	<meta name="author" content="designed by http://solankimimoh.tumblr.com/">
	<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0, minimum-scale=1.0" />
	<link type="text/css" href="css/global.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/full-slider.css" rel="stylesheet">

	<style>
		.profileimg {
			opacity: 1;
		}

	</style>

</head>

<body id="showcase">
	<header id="main" class="transition">

		<?php include('templates/header.php'); ?>

	</header>

	<div class="container">

		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h4><strong>Location</strong> </h4>
				<p style="width:3500px;font-size:1.5em;line-height:1.5;">
					228 /1/4, Opp. Satyamev Chaoni - 7,<br/> Dantali Industrial Estate, <br/>DANTALI Gandhinagar (382721)</p>
				<br/>
				<h4><strong>Inquiries</strong> </h4>
				<p style="width:3500px;font-size:1.5em;line-height:1.5;">
					Email : <br/>
					<span><a href="mailto:info@wallawallafoundry.com">spacica4@gmail.com</a></span> <br/> Mobile: : <br/>
					<span><a href="tel:509-522-2114%20x301" target="_blank">+91 98980 66798 / 99099 47342</a></span> <br/>
				</p>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="font-size: 1.7em;line-height: 1.5;">
				<form class="form-horizontal" action="mailer.php" method="post">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Name">
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="contact" id="inputPassword3" placeholder="Contact">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="subject" id="inputPassword3" placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea rows="4" class="form-control" name="msg" cols="47" placeholder="Message"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>

	
	<footer>

		<h4 style="text-align:center;">Copyright © 2017 Spacica. All rights reserved.<br/> Design By : <a href="http://dc4itsolutions.in/" target="_blank"> DC4 IT Solutions</a></h4>
	</footer>

	<script type="text/javascript" src="/build/viyahome.min.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})

	</script>

</body>

</html>
