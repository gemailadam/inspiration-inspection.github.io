<section class="site-title" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a>'; ?>
</section>
<section class="banner" >
<img id="img1" src="<?php bloginfo('template_directory'); ?>/images/shadow.png ?>" alt="">	
<img id="img2" src="<?php bloginfo('template_directory'); ?>/images/02.jpg ?>" alt="">	
</section>
<section class="nav" >
	<nav><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
</section>