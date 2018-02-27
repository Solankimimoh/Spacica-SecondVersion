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
	<?php
	include('includes/dbfunctions.php');

    $db = new DB_FUNCTIONS();
	
	?>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Spacica | Collection</title>

		<meta name="keywords" content="">
		<meta name="author" content="designed by http://solankimimoh.tumblr.com/">
		<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0, minimum-scale=1.0" />
		<meta name="HandheldFriendly" content="True">
		<link rel="shortcut icon" href="img/fav.html">
		<link rel="icon" href="favicon.html" type="image/gif">
		<link type="text/css" href="css/global.css" rel="stylesheet">

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/full-slider.css" rel="stylesheet">
		  <link rel="stylesheet" href="css/lightbox.min.css">


</head>

<body id="collection">
	<header id="main" class="transition">
		<?php include('templates/header.php'); ?>
	</header>
	<div id="container">
		<section id="section-collection" class="clearfix on">
			<header id="header-collection" class="clearfix">

			</header>

			<div  id="lightgallery" class="clearfix on">

				<?php 
						
						$selectimgall = "SELECT * FROM `imageinfo`";
						
						
						$result = mysqli_query($db->con,$selectimgall);
						
						while( $row = mysqli_fetch_row($result))
						{
							?>
				<figure class="cubistfrieze" >
					
						<div class="padding" >
							<a   href="../admin/uploads/<?php echo $row[1]; ?>" data-lightbox="example-set" data-title="">
							<img src="../admin/uploads/<?php echo $row[1]; ?>" class="on">
							</a>
						</div>

					
				</figure>
				<?php } ?>
			</div>
		</section>
	</div>
	
	<footer>

		<h4 style="text-align:center;">Copyright © 2017 Spacica. Design By : DC4 IT Solutions</h4>
	</footer>

	<script type="text/javascript" src="/build/viyahome.min.js"></script>
	  <script src="js/lightbox-plus-jquery.min.js"></script>

</body>

</html>
