<?php 
/*
404.php
The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query. 
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic.css"/>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
	
	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>	

	
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
	
	<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
	<div class="container">

		<!-- 1) header-->
		<header>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php get_header(); ?>
				</div>
			</header>
			<div class="oops">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1>Oops The Page You Request Is not Found , You have been redirected To Home Page</h1> 
					</div>
				</div>
			</div>   
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="col-xs-9 col-lg-9 col-md-12 col-sm-12">
							
							<div class="rect">
								<h1 style="color:#2288BD;"><u>HOME</u></h1>


								<h1>Under Construction</h1>

								<p>Under Construction , Under Construction , Under Construction Under Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under Construction
								</p>
							</div>	

						</div>
					</div>
					
					<!-- 2-2 ) sidebar part if you want -->
					<div class="sidebar">
						<div class="col-xs-3 col-lg-3 col-md-12 col-sm-12">
							<?php get_sidebar(); ?>
							<br/>
						</div>
					</div>

				</div>
				<!--End Row -->
			</div>
			<!--End main -->

			<!-- 3 ) footer-->
			<footer>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php get_footer(); ?>
					</div>
				</div>
			</footer>
			<!-- End footer-->
			
		</div>
		<!-- End Container-->
		<script type="text/javascript"></script>
		<?php wp_footer(); ?>	
	</body>
	</html>