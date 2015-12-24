<?php
/*
 * Template Name: 1 column Full Width
 * Description: Page template without sidebar
 */
?>
		<?php get_template_part('page-templates/head_html'); ?>

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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<?php get_template_part('page-templates/main_page'); ?>

				</div>
		    </div>
		    <!-- 2-2 ) sidebar part if you want -->


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
		<?php get_template_part('page-templates/script'); ?>

</body>
</html>