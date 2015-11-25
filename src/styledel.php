<?php 
/* Template for customize
function customize_theme($wp_customize){
    $id_section ='';    
    $section = array(
        'title' =>__( 'Put Visible Section Name', 'Put your theme name' ) ,
        'description' => '',
        'priority' => '' );
    $wp_customize->add_section($id_section,$section);

    $id_settings ='';       
    $settings= array('default' => '', );
    $wp_customize->add_setting($id_settings,$settings);

    $id_control =$id_settings ;            
    $control= array(
        'label' => __( 'Put Visible label Name', 'Put your theme name' ),
        'section' => $id_section ,
        'settings' => $id_settings );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,$id_control,$control));
}

*/
/* add action or add filter method [wordpress function]
$tag=;
$function_to_add=;
$priority=;
$accepted_args=;
add_action($tag, $function_to_add, $priority, $accepted_args );
*/

function customize_theme($wp_customize){

    $wp_customize->add_section('Section_BG_CLR_ID',array(
        'title' =>'Background CLR' ,
        'description' => 'hesham description here',
        'priority' => '1' ));

    $wp_customize->add_setting('Background_COLOR_Settings_ID',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'Background_COLOR_Settings_ID',array(
        'label' =>'Bg COLOR',
        'section' => 'Section_BG_CLR_ID' ,
        'settings' => 'Background_COLOR_Settings_ID' )));

//HTML font color
    $wp_customize->add_section('Section_CLR_ID',array(
        'title' =>'CLR' ,
        'description' => 'hesham description here',
        'priority' => '2' ));

    $wp_customize->add_setting('HTML_COLOR_Settings_ID',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'HTML_COLOR_Settings_ID',array(
        'label' =>'Pragraphs COLOR',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'HTML_COLOR_Settings_ID' )));
// a link color

    $wp_customize->add_setting('a_link_color_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_link_color_id',array(
        'label' =>'linls colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_link_color_id' )));

// a visited color

    $wp_customize->add_setting('a_visited_color_id',array('default' => '#aaa' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_visited_color_id',array(
        'label' =>'Visited Links Colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_visited_color_id' )));


// a Hover color

    $wp_customize->add_setting('a_hover_color_id',array('default' => '#999' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_hover_color_id',array(
        'label' =>'Hover Links Colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_hover_color_id' )));

$wp_customize->add_section('TesT_ID',array('title'=>'TEST'));
$wp_customize->add_setting('powered_by',array('default' => 'gray',));
$nbn='gray';
if($nbn=$bnb){
    $fbf='#777'; 
} 
$bnb=$wp_customize->add_control('powered_by',array(
        'type' => 'select',
        'label' => 'This site is powered by:',
        'section' => 'TesT_ID',
        'choices' => array(
            'blue' => 'BLUE',
            'red' => 'RED',
            'green' => 'GREEN',
            'gray' => 'GRaY',
            'blackwhite' => 'BLACKWHITE',
            'whiteblack' => 'WHITEBLACK',
        ),
    )
);

// section Best Customize

// http://themefoundation.com/wordpress-theme-customizer/

/*
<?php
    $example_position = get_theme_mod( 'logo_placement' );
    if( $example_position != '' ) {
        switch ( $example_position ) {
            case 'left':
                // Do nothing. The theme already aligns the logo to the left
                break;
            case 'right':
                echo '<style type="text/css">';
                echo '#header #logo{ float: right; }';
                echo '</style>';
                break;
            case 'center':
                echo '<style type="text/css">';
                echo '#header{ text-align: center; }';
                echo '#header #logo{ float: none; margin-left: auto; margin-right: auto; }';
                echo '</style>';
                break;
        }
    }
?>
*/
/*
    $wp_customize->add_setting('color_schema_id');

    $wp_customize->add_control('color_schema_id',array(
        'label' =>'Choose Colors Schema',
        'section' => 'Section_CLR_ID' ,
        'type' =>'select',
        'choices'=> threeDaVinci_colors_choices() ));
*/

/*
$wp_customize->add_setting(
    'powered_by',
    array(
        'default' => 'gray',
    )
);
 
$wp_customize->add_control(
    'powered_by',
    array(
        'type' => 'select',
        'label' => 'This site is powered by:',
        'section' => 'example_section_one',
        'choices' => array(
            'blue' => 'BLUE',
            'red' => 'RED',
            'green' => 'GREEN',
            'gray' => 'GRaY',
            'blackwhite' => 'BLACKWHITE',
            'whiteblack' => 'WHITEBLACK',
        ),
    )
);
*/



// http://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html
/* select post to php value
$selectOption = $_POST['taskOption'];


<select name="taskOption">
  <option value="1">First</option>
  <option value="2">Second</option>
  <option value="3">Third</option>
</select>
*/


// http://www.formget.com/php-select-option-and-php-radio-button/http://www.formget.com/php-select-option-and-php-radio-button/


}

add_action('customize_register','customize_theme');



function threeDaVinci_colors_choices(){

echo '<select name="" id="">';
    echo '<option value="blue">Blue</option>';
    echo '<option value="red">Blue</option>';
echo '</select>';
}

function css_customizer(){

?>


<style type="text/css">
html {
  color:<?php echo get_theme_mod('HTML_COLOR_Settings_ID'); ?>;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
  color:<?php echo '#777'; ?>;    
}
body {background-color:<?php echo get_theme_mod('HTML_COLOR_Settings_ID'); ?>;}
a:link {color: <?php echo get_theme_mod('a_link_color_id'); ?>;}
a:visited {color: <?php echo get_theme_mod('a_visited_color_id'); ?>;}
a:hover {color: <?php echo get_theme_mod('a_hover_color_id'); ?>;}


</style>

<?php
}
add_action('wp_head','css_customizer' );

/*

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
*/
 ?>
