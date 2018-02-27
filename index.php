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
	<title>Spacica | Home</title>

	<meta name="keywords" content="">
	<meta name="author" content="designed by http://solankimimoh.tumblr.com/">
	<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0, minimum-scale=1.0" />
	<link type="text/css" href="css/global.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/full-slider.css" rel="stylesheet">

</head>

<body id="showcase">
	<header id="main" class="transition">
		<?php include('templates/header.php'); ?>
	</header>
	<div id="container">
		<section id="myCarousel" style="padding-top:13.2em" class="carousel slide clearfix royalSlider on">


			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
			
                <?php
            
            $sliderdata = "SELECT * FROM `slider`";
            
            $result = mysqli_query($db->con,$sliderdata);
            
            $i=0;
            while($row=mysqli_fetch_row($result))
            {
                
                if($i==0)
                {
                    $i++;
                    ?>
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('admin/uploads/slider/<?php echo $row[1]; ?>');"></div>
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <?php
                    
                }
                else
                {
                    ?>
                        <div class="item">
                            <!-- Set the second background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('admin/uploads/slider/<?php echo $row[1]; ?>');"></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                
                        <?php
                    
                }
                
            }
            
            ?></div>

			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>

		</section>
	</div>
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
