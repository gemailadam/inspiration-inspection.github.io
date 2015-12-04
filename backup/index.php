<?php 
/*
index.php
    The main template. If your Theme provides its own templates, index.php must be present. 
*/
 ?>
<?php/*
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=downloaded.pdf");

// The PDF source is in original.pdf
readfile("original.pdf");
*/?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

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
				<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 ">
					
				<?php get_template_part('main_index'); ?>
										

				</div>
		    </div>

                	<?php /*get_template_part('comments');*/?>
		    <!-- 2-2 ) sidebar part if you want -->
			<div class="sidebar">
				<div class=" col-xs-3 col-lg-3 col-md-12 col-sm-12 ">
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
	<!-- End Container-->

	<?php wp_footer(); ?>

</body>
</html>