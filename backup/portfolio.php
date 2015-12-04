<?php
/*
 * Template Name: Portfolio
 * Description: Portfolio posts
 */
?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

		<?php get_template_part('head_html'); ?>
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
					the_author();
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
	<!-- End Container-->

	<?php get_template_part('script'); ?>
</body>
</html>