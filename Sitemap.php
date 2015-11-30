<?php 
/*
Template Name:sitemap
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->



	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        
    <title><?php the_permalink(); the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/elements.css"/>
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/css/style.php" />

    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
<div class="container">

	<!-- 1) header-->
	<header>
		<div class="row">
			<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12">
                 <?php get_header(); ?>
            </div>
    </header>
		<!-- 2 ) main -->
		<div class="main">
		<div class="row">
			<!-- 2-1 ) page part -->
			<div class="page">
				<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 ">
				<!--img width="100%" src="<?php bloginfo('template_directory'); ?>/images/egypt1.jpg" alt="">
				<img width="100%" src="<?php bloginfo('template_directory'); ?>/images/egypt2.jpg" alt="">
				<img width="100%" src="<?php bloginfo('template_directory'); ?>/images/egypt3.jpg" alt=""-->
				<img width="110%" style="margin-left:-50px;" src="<?php bloginfo('template_directory'); ?>/images/egyptfull.jpg" alt="">
						
				<iframe src="https://www.google.com/maps/d/embed?mid=zvP4vccIyHic.kwFmYMSEnOAo&hl=en_US" width="640" height="480"></iframe>
				</div>
		    </div>

		</div>
		<!--End Row -->
		</div>
		<!--End main -->
		<br>
		<!-- 3 ) footer-->
		<footer>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<br/>
					<?php get_footer(); ?>
				</div>
			</div>
		</footer>
		<!-- End footer-->
	
	</div>
	<!-- End Container-->
	<?php get_template_part('script'); ?>

</body>
</html>