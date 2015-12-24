<?php
/*
 * Template Name: Portfolio
 * Description: Portfolio posts
 */
?>

		<?php get_template_part('page-templates/head_html'); ?>

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
		<!-- 2 ) main -->
		<div class="main">
		<div class="row">
			<!-- 2-1 ) page part -->
			<div class="page">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
					<?php
					// if(have_posts()) :
					// 						if ( is_main_query() ) :
					// 		query_posts($query_string . '&cat=-6'); 
					// while ( have_posts() ) : the_post();
					
					// echo '<div class="rect">';
					// echo '<h1><a>';
					// the_title();
					// echo '</a></h1>';
					// echo '<br/>';
					// echo '<br/>';
					// the_content();
					// echo "</div>";
					// endwhile;
					// endif;
					// else :
					//  echo "No Content Found , or there is nothing Page By you yet";
					// endif;				            
					?>	
					<?php
  $row="";

  $link = mysql_connect("sql100.byethost7.com","b7_16817694","qwerREWQ1234$#@!");
  mysql_select_db("b7_16817694_wordpress20151030");
  $query = "SELECT * from wp_posts ORDER by ID DESC limit 0,5";
  $result = mysql_query($query);
  $result = mysql_query($query) or die("Query to get blah failed with error:".mysql_error());

  while($row = mysql_fetch_array($result)) { 
    echo "<div id='display'>";
    echo "<h3 class='name'>".$row['post_author']."</h3>";
    echo "<h1 class='title' >".$row['post_title']."</h1>";
    echo "<p class='cat'>".$row['cat']."</p>";
    echo "<p class='post_date'>".$row['post_date']."</p>";
    echo "<p class='post_content'>".$row['post_content']."</p>";

    echo "</div>";
    					echo '<div class="postedby">';
					echo '<a href="';
					the_author_link();
					echo '">';
					the_author();<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-dynamic.css"/>
<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
		
<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>	
   
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<!-- difference between wordpress html5.js vs html5shiv.js by cdn-->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!--title><a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'theme-name' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></title-->
        <title><?php the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?-->
		<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
		
        <?php wp_head(); ?>
					echo "</a>";
					echo '<a href="';
					the_permalink();	
					echo '">';
					the_date('F Y');
					echo '</a>';
					
					the_category();
					
					echo '<br/>';
					echo '</div>';
  } 

  mysql_close($link);
?>

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
</div>
<!-- End Container-->

	<?php get_template_part('page-templates/script'); ?>
</body>
</html>