<?php 
/*
Template Name: home page
*/
 ?>
<?php 
/*home.php
   The home front page template. 
    
*/
   ?>


		<?php get_template_part('page-templates/head_html'); ?>


<body <?php body_class( ); ?> >
<div class="container ">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<!-- 1) header-->
		<header>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php get_template_part('page-templates/home_page'); ?>
				</div>
			</header>
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-9">
							

						<?php get_template_part('page-templates/main_page'); ?>

						</div>
					</div>

					<!-- 2-2 ) sidebar part if you want -->
					<div class="sidebar">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-3">
							<?php get_sidebar(); ?>
							<br/>
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
</div>
<!-- End Container-->
	
	<?php get_template_part('page-templates/script'); ?>

	</body>
	</html>