<?php 
function heads(){

 ?>
	<!--script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script-->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->



	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        
    <title><?php the_permalink(); the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic-row.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/elements.css"/>
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/css/style.php" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/header.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/footer.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/navbar.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/page.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/roots.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/sidebar.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/sitemap.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/slideshow.css" />

	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/header760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/footer760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/navbar760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/page760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/roots760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/sidebar760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/sitemap760.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/760/slideshow760.css" />

	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/header960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/footer960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/navbar960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/page960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/roots960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/sidebar960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/sitemap960.css" />
	<link rel='stylesheet' type='text/css' href="<?php bloginfo('template_directory')?>/style/960/slideshow960.css" />

<?php 

}

add_action('wp_head','heads' );

 ?>