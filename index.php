<?php 
/*
index.php
    The main template. If your Theme provides its own templates, index.php must be present. 
*/
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"/-->

<!-- Optional theme -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"/-->
<!--link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/elements.css"/-->
<!--link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-static.css"/-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
		
<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>	

<!-- Wordpress -->
<!-- from hh -->
   
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<!--search difference between wordpress html5.js vs html5shiv.js by cdn-->
<!-- from hh END -->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!--title><a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'theme-name' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></title-->
        <title><?php the_permalink(); the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?-->
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
				<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 ">
					
					<?php
					if(have_posts()) {
					while ( have_posts() ) { 

					the_post();
					echo '<div class="rect">';
					echo '<h1><a href="';
					the_permalink();	
					echo'">  ';
					the_title();
					echo '</a></h1>';
					echo '<br/>';
					echo '<a href="';
					the_permalink();	
					echo '">  ';
					the_author();
					echo "</a> - ";
					/*echo '<a href="';
					the_permalink();	
					echo '">  ';
					the_tags();
					echo "</a> - ";*/
					echo '<a href="';
					the_permalink();	
					echo '">  ';
					the_date();
					echo '</a>';
					echo '<br/>';
					echo '<br/>';
					
					the_content('<br/><p class="push_button">Read more </p>');
					echo "</div>";
					}
					}else { echo "No Content Found , or there is nothing posted By you yet";}					            
					?>	
					

				</div>
		    </div>
            
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
	<script>

	$('.banner > img:gt(0)').hide();
		setInterval(function() { 
		  $('.banner > img:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('.banner');
		},  1000);
	</script>
<?php wp_footer(); ?>	
</body>
</html>