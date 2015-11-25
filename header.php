<section class="site-title" >
<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png ?>" alt="">

	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a>'; ?>

</section>
<br/>

<section class="banner" >

<img src="<?php bloginfo('template_directory'); ?>/images/09.jpg ?>" alt="">	
<img src="<?php bloginfo('template_directory'); ?>/images/010.jpg ?>" alt="">	
	

</section>
<img id="shadow" src="<?php bloginfo('template_directory'); ?>/images/shadow.png ?>" alt="">
<img id="btn" src="<?php bloginfo('template_directory'); ?>/images/btn.png ?>" alt="" usemap="#planetmap">
 
<map name="planetmap">
  <area shape="poly" coords="0,0,0,150,75,75" href="sun.htm" alt="Sun">
  <area shape="poly" coords="150,150,150,0,75,75" href="mercur.htm" alt="Mercury">
  <area shape="poly" coords="150,0,150,150,75,75" href="venus.htm" alt="Venus">
  <area shape="poly" coords="0,0,0,1500,75,75" href="venus.htm" alt="Venus">
</map> 
<br/>
<section class="nav" >
	<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
</section>
<br/>
<br/>