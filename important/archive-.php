<?php
/*
Template Name: Archives
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
      	<?php get_template_part('page-templates/head_html');?>

</head>
<body <?php body_class( ); ?> >
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

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
					
				<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Category Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>	
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
</div>
<!-- End Container-->
  	<?php get_template_part('page-templates/script');?>

</body>
</html>