<?php 
/*woocommerce from page.php
   The page template. 
   Used when an individual Page is queried. 
*/
   ?>
<?php/*
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
*/?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

		<?php get_template_part('page-templates/head_html'); ?>

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
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-9">
							
						<?php woocommerce_content(); ?>

						</div>
					</div>

					<!-- 2-2 ) sidebar part if you want -->


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
	
	<?php get_template_part('page-templates/script'); ?>

	</body>
	</html>