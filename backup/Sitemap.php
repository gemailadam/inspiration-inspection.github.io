<?php 
/*
Template Name:sitemap
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->



	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="x-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
	<!--[if it ie 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        
    <title><?php the_permalink(); the_title( '' , ' xx ', 'left' );bloginfo('name' );?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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
				<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 relative">
				<!--img width="100%" src="<?php bloginfo('template_directory'); ?>/images/egypt1.jpg" alt="">
				<img width="100%" src="<?php bloginfo('template_directory'); ?>/images/egypt2.jpg" alt="">
				<img width="100%" src="<?php bloginfo('template_directory'); ?>/images/egypt3.jpg" alt=""-->
				<div class="wrapper">
					<img class="sitemap"  src="<?php bloginfo('template_directory'); ?>/images/egyptfull.jpg" alt="">
					<div class="maplinks">
						<table>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td><img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/arow.gif" alt=""></td><td></td></tr>
							<tr class="row-xs-1a row-lg-1a row-md-1a row-sm-1a"><td></td><td></td><td></td><td class="tabs"><a href="http://inspirati.byethost7.com/">HOME</a></td><td>abab</td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td class="description"><p> the front main start page , providing description on bref about the porpose of this website , providing links to important and recent portfolio , articles and pages .</p></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1 cut"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1 cut"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td><img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/arow.gif" alt=""></td></tr>
							<tr class="row-xs-1a row-lg-1a row-md-1a row-sm-1a"><td></td><td></td><td></td><td></td><td class="tabs"><a href="http://inspirati.byethost7.com/about/">about</a></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td class="description"><p>showing you what team can do for you or have done for others</p></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1 cut"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1 cut"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td><img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/arow.gif" alt=""></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1a row-lg-1a row-md-1a row-sm-1a"><td></td><td class="tabs"><a href="http://inspirati.byethost7.com/contact-us/">Contact Us</a></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td class="description"><p>fast contact for support </p></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1 cut"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1 cut"><td></td><td></td><td></td><td></td><td></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td><img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/arow.gif" alt=""></td><td></td><td></td><td></td><td><img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/arow.gif" alt=""></td></tr>
							<tr class="row-xs-1a row-lg-1a row-md-1a row-sm-1a"><td class="tabs"><a href="http://inspirati.byethost7.com/portfolio/">Prtfolio</a></td><td></td><td></td><td></td><td class="tabs"><a href="http://inspirati.byethost7.com/articles/">articles</a></td></tr>
							<tr class="row-xs-1 row-lg-1 row-md-1 row-sm-1"><td class="description"><p>Portfolios and Description</p></td><td></td><td></td><td></td><td class="description"><p>Useful articles about web develop</p></td></tr>
							<tr>
							<td>
							<form action="#" method="POST">
							<select name="porto" id="portfolioID" onchange="this.form.submit()">
							<optgroup label="E-commerce">
							<option value="">Select</option>
							<option value="3DaVinci">3DaVinci</option>
							<option value="2birds">2birds</option>
							</optgroup>

							</select>
							<!--input type="submit" value="Send" /-->
							</form>
							</td>
							
							<td></td>
							<td></td>
							<td></td>
							
							<td>
							<form action="#" method="POST">							
							<select name="arti" id="articlesID" onchange="this.form.submit()">
							<optgroup label="Web Design">
							<option value="">select</option>
							<option value="article1">article1</option>
							<option value="article2">article2</option>
							</optgroup>
						    <optgroup label="Web Develop">
						    </optgroup>		
							</form>							
							</td>
							</tr>

							<tr>
							<td>
							<?php 
							if(isset($_POST["porto"]))
							{
								$portfolioName= $_POST["porto"];
								if ($portfolioName=='3DaVinci') {
									
								
								$row="";

								$link = mysql_connect("sql100.byethost7.com","b7_16817694","qwerREWQ1234$#@!");
								mysql_select_db("b7_16817694_wordpress20151030");
								$query = "SELECT * from wp_posts ORDER by ID DESC limit 0,5";
								$result = mysql_query($query);
								$result = mysql_query($query) or die("Query to get blah failed with error:".mysql_error());

								while($row = mysql_fetch_array($result)) { 
									echo "<div>";
									echo "<h1 class='title' >".$row['post_title']."</h1>";
									echo "<p class='post_date'>".$row['post_date']."</p>";
									echo "<br/></div>";
									}
  								mysql_close($link);
  								}
							}
							elseif (!isset($_POST["porto"])) {
								//echo "error please select";
								echo "<div>";
								echo "<h1 class='title' >".$row['post_title']."</h1>";
								echo "<p class='post_date'>".$row['post_date']."</p>";
								echo "<br/></div>";								
							}
							?>
							</td>
			
							<td></td>
							<td></td>
							<td></td>

							<td>
							<?php 
							if(isset($_POST["arti"]))
							{
								$portfolioName= $_POST["arti"];
								if ($portfolioName=='article1') {
									
								
								$row="";

								$link = mysql_connect("sql100.byethost7.com","b7_16817694","qwerREWQ1234$#@!");
								mysql_select_db("b7_16817694_wordpress20151030");
								$query = "SELECT * from wp_posts ORDER by ID DESC limit 0,5";
								$result = mysql_query($query);
								$result = mysql_query($query) or die("Query to get blah failed with error:".mysql_error());

								while($row = mysql_fetch_array($result)) { 
									echo "<div>";
									echo "<h1 class='title' >".$row['post_title']."</h1>";
									echo "<p class='post_date'>".$row['post_date']."</p>";
									echo "<br/></div>";
									}
  								mysql_close($link);
  								}
							}
							elseif (!isset($_POST["arti"])) {
								//echo "error please select";
								echo "<div>";
								echo "<h1 class='title' >".$row['post_title']."</h1>";
								echo "<p class='post_date'>".$row['post_date']."</p>";
								echo "<br/></div>";
							}
							?>
							</td>
							</tr>
						</table>
					</div>	
				</div>
				</div>

		    </div>

		</div>
		<!--End Row -->
		</div>
		<!--End main -->

		<div class="mapper">
		<div class="row">
		<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 relative">
			<iframe id='gmap'src="https://www.google.com/maps/d/embed?mid=zvP4vccIyHic.kwFmYMSEnOAo&hl=en_US" width="100%" height="480"></iframe>

			<div id="map" style="width:100%;height:400px"></div>
		</div>
        </div>
        </div>
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

	<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
var mapCanvas = document.getElementById("map");
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
}
var map = new google.maps.Map(mapCanvas, mapOptions);
</script>

	<?php get_template_part('script'); ?>

</body>
</html>