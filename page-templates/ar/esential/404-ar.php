<?php 
/*
404.php
The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query. 
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->
<head>
		<?php get_template_part('page-templates/head_html'); ?>

</head>
<body <?php body_class( ); ?> >
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

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
				<?php get_template_part('page-templates/main_index'); ?>
								
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
		</div>
		<!-- End Container-->
			<?php get_template_part('page-templates/script'); ?>

	</body>
	</html>