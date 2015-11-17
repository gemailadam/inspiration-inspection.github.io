<?php 
/* single.php
*
* for showing the post at seperate page
*
* The single post template. Used when a single post
* is queried. For this and all other query templates, 
* index.php is used if the query template is not present. 
*/ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic.css"/>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
	
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<!--difference between wordpress html5.js vs html5shiv.js by cdn-->
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
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-9">

							<?php
							if(have_posts()) : 
								while ( have_posts() ) : the_post();
							
							echo '<div class="rect">';
							echo '<h1><a>';
							the_title();
							echo '</a></h1>';
							echo '<br/>';
							echo '<br/>';
							the_content('<br/>Read more >>');
							echo "</div>";
							endwhile;
							else :
								echo "No Content Found , or there is nothing Page By you yet";
							endif;				            
							?>	
							<span class="">
								<?php previous_post_link(); ?>
							</span>

							<span class="fl-ri">
								
								<?php next_post_link(); ?>
							</span>  

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
		<!-- End Container-->
		<script>

			$('.banner > img:gt(0)').hide();
			setInterval(function() { 
				$('.banner > img:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('.banner');
			},  1000);
		</script>
		<?php wp_footer(); ?>	
	</body>
	</html>     