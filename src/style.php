<?php 
/* Template for customize
function customize_theme($wp_customize){
	$section = array('title' =>'' ,'description' => '','priority' => '' );
    $wp_customize->add_section($id,$section);
    $settings= array('default' => '' );
    $wp_customize->add_settings($id,$settings);
    $control= array('label' => '','section' => '','settings' => '' );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'',$control));
}
*/

function customize_theme($wp_customize){
	$section = array('title' =>'' ,'description' => '','priority' => '' );
    $wp_customize->add_section('',$section);
    $settings= array('default' => , );
    $wp_customize->add_settings('',$settings);
    $control= array('label' => '','section' => '','settings' => '' );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'',$control));
}

$tag=;
$function_to_add=;
$priority=;
$accepted_args=;
add_action($tag, $function_to_add, $priority, $accepted_args );

function css_customizer(){



?>

<style type="text/css">
body{}
.container{}
.row {}
	
</style>

<?php
}

$tag=;
$function_to_add=;
$priority=;
$accepted_args=;
add_action($tag, $function_to_add, $priority, $accepted_args );

?>


 <?php 

function theme_customizer_register($wp_customize){
$wp_customize->add_section('3cms_colors',array(
    'title'=>__('3CMS color','3cms'),
    'description'=>'Modify Theme Colors',
    'priority'=>30
    ));

$wp_customize->add_setting('background_color',array('default'=>'#fff'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'background_color',array(
'label'=>__('Edit background color','3cms'),
'section'=>'3cms_colors',
'settings'=>'background_color'
)   ));

//title color
$wp_customize->add_setting('title_color',array('default'=>'#2288BD'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'title_color',array(
'label'=>__('Edit website title color','3cms'),
'section'=>'3cms_colors',
'settings'=>'title_color'
)   ));

//description color
$wp_customize->add_setting('description_color',array('default'=>'#000'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'description_color',array(
'label'=>__('Edit website description color','3cms'),
'section'=>'3cms_colors',
'settings'=>'description_color'
)   ));
//------------------------------------------------------------------------------
// navigation menus
$wp_customize->add_section('nav_colors',array(
    'title'=>__('3CMS Navigation menus','3cms'),
    'description'=>'Modify Navigation menus Colors',
    'priority'=>31
    ));

$wp_customize->add_setting('nav_links_colors',array('default'=>'#fff'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'nav_links_colors',array(
'label'=>__('Edit menus links colors','3cms'),
'section'=>'nav_colors',
'settings'=>'nav_links_colors'
)   ));

$wp_customize->add_setting('nav_bg_colors',array('default'=>'#444'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'nav_bg_colors',array(
'label'=>__('Edit menus background colors','3cms'),
'section'=>'nav_colors',
'settings'=>'nav_bg_colors'
)   ));

$wp_customize->add_setting('nav_bg_hover_colors',array('default'=>'#666'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'nav_bg_hover_colors',array(
'label'=>__('Edit menus background hover colors','3cms'),
'section'=>'nav_colors',
'settings'=>'nav_bg_hover_colors'
)   ));

// Slideshow images
$wp_customize->add_section('change_img',array(
    'title'=>__('3CMS Slide show images','3cms'),
    'description'=>'Modify Slideshow images',
    'priority'=>22
    ));

$wp_customize->add_setting('slide_img',array('default'=>'http://inspirati.byethost7.com/wordpress/wp-content/themes/3CMS/images/06.jpg'));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'slide_img',array(
'label'=>__('Change Slide Show Images','3cms'),
'section'=>'change_img',
'settings'=>'slide_img'
)   ));

$wp_customize->add_setting('bg_image',array('default'=>'none'));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image', array(
    'label'        => __( 'Change Background Image', '3cms' ),
    'section'    => 'change_img',
    'settings'   => 'bg_image',
) ) );

}
add_action('customize_register','theme_customizer_register');

function css_customizer(){

 ?>
 
<style type="text/css">
body { background-color: #<?php echo get_theme_mod('background_color'); ?>; }   
.blogname h1 a {color: <?php echo get_theme_mod('title_color'); ?>; }
.blogname h2 {color: <?php echo get_theme_mod('description_color'); ?>; }
.cms-menu a ,.cms-menu a:link,.cms-menu a:visited {color: <?php echo get_theme_mod('nav_links_colors'); ?>;}
.cms-menu a {background-color:<?php echo get_theme_mod('nav_bg_colors'); ?>;}
.cms-menu a:hover {background-color: <?php echo get_theme_mod('nav_bg_hover_colors'); ?>;}


</style>

<?php 
}
add_action('wp_head','css_customizer' );
 ?>
