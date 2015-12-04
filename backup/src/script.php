<?php 
function scripts(){


?>
<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/slideshow.js">
</script>	

<script type="text/javascript">
</script>
<?php 
}
add_action('wp_footer','scripts' );


 ?>