<section class="site-title" >
<img id="logo" width="10%" style="float:right;margin-right:10px;" src="<?php bloginfo('template_directory'); ?>/images/logo.png ?>" alt="">

	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a>'; ?>

</section>
<br/>

<section class="banner" >

<img src="<?php bloginfo('template_directory'); ?>/images/09.jpg ?>" alt="">	
<img src="<?php bloginfo('template_directory'); ?>/images/010.jpg ?>" alt="">	
	

</section>
<img id="shadow" src="<?php bloginfo('template_directory'); ?>/images/shadow.png ?>" alt="">
<br/>
<section class="nav" >
	<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
</section>
<br/>
<br/>