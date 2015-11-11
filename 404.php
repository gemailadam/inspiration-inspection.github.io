<?php 
/*
404.php
The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query. 
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"/-->

<!-- Optional theme -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"/-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic.css"/>
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
        <title><?php the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?-->
		<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
		
        <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
<div class="container">
<div class="oops">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 style="color:#2288BD;box-shadow:2px 2px 4px #999;text-shadow:2px 2px 4px #999;">Oops The Page You Request Is not Found , You have been redirected To Home Page</h1> 
        </div>
    </div>
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
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
					

<h1 style="color:#2288BD;"><u>HOME</u></h1>


<h1>Under Construction</h1>

<p>Under Construction , Under Construction , Under Construction Under Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under Construction
</p>
					

				</div>
		    </div>
            
		    <!-- 2-2 ) sidebar part if you want -->
			<div class="sidrbar">
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                	<?php get_sidebar(); ?>
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