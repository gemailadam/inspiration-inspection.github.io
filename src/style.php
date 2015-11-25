<?php 


function customize_theme($wp_customize){

//background color
    $wp_customize->add_section('Section_BG_CLR_ID',array(
        'title' =>'Background CLR' ,
        'description' => 'hesham description here',
        'priority' => '1' ));

    $wp_customize->add_setting('Background_COLOR_Settings_ID',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'Background_COLOR_Settings_ID',array(
        'label' =>'Bg COLOR',
        'section' => 'Section_BG_CLR_ID' ,
        'settings' => 'Background_COLOR_Settings_ID' )));
//body bg color
    


// row background color
    $wp_customize->add_setting('row_bg_color_id',array('default' => '#222' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'row_bg_color_id',array(
        'label' =>'Bg COLOR',
        'section' => 'Section_BG_CLR_ID' ,
        'settings' => 'row_bg_color_id' )));
//


//

//    

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

// a color
   $wp_customize->add_setting('a_color_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_color_id',array(
        'label' =>'a colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_color_id' )));



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

// site title visited color
    
    $wp_customize->add_setting('site_title_visited_color_id',array('default' => '#fff' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'site_title_visited_color_id',array(
        'label' =>'Hover Links Colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'site_title_visited_color_id' )));

// navbar 
   // ul bg color 
    $wp_customize->add_section('Section_nav_ID',array(
        'title' =>'navigation menus' ,
        'description' => 'hesham description here',
        'priority' => '1' ));

    $wp_customize->add_setting('nav_ul_bg_color_id',array('default' => '#444' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_ul_bg_color_id',array(
        'label' =>'navigation background color',
        'section' => 'Section_nav_ID' ,
        'settings' => 'nav_ul_bg_color_id' )));



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
 
}
body {background-color:<?php echo get_theme_mod('Background_COLOR_Settings_ID','#222'); ?>;}
a {color: <?php echo get_theme_mod('a_color_id'); ?>;}
a:link {color: <?php echo get_theme_mod('a_link_color_id'); ?>;}
a:visited {color:<?php echo get_theme_mod('a_visited_color_id','#aaa'); ?>;}
a:hover {color: <?php echo get_theme_mod('a_hover_color_id'); ?>;}


ul,li {list-style: none;padding: 0;margin: 0;}


.gap {clear:both;}
.container { } 
.row {background-color:<?php echo get_theme_mod('row_bg_color_id','#222'); ?>;}

.site-title a:visited {color:<?php echo get_theme_mod('site_title_visited_color_id','#fff'); ?>;}

.site-title a {
    font-size: 25px;text-decoration: none;font-weight: bold;
  padding: 0 80px;
  text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444, 0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
}
.site-title p a {
    font-size: 30px;text-decoration: none;font-weight: bold;
  padding: 10px 20px;margin: 0 10px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px #444;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;      
    
}

@media (max-width: 700px){
.site-title a {font-size: 20px;padding: 0 20px;}
.site-title p a {font-size: 25px;padding: 5px 10px;}    

}

@media (max-width: 500px){
.site-title a {font-size: 15px;padding: 0 20px;}
.site-title p a {font-size: 15px;padding: 5px 10px;}    

}
.banner {position: relative;}

.banner img {width:90%;margin:10px 5%;position: absolute;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px  #444 , 0px 20px 25px #000;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;      
      text-shadow: 0px 7px 0 #444, 0px 6px 0 #444, 0 5px 0 #444,0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
    }

img#shadow { width:90%;margin:10px 5%;position:relative;z-index: -10;}
/*navbar Primary */

/* .nav div was .menu */
.nav div {
    height:50px;width:90%;
    padding: 0px;margin: 0px auto ;
    border-radius:3px 3px 30px 30px;border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;

    }

.nav div > ul {
    background-color:<?php echo get_theme_mod('nav_ul_bg_color_id','#444'); ?>;
    border-radius:3px 3px 30px 30px;
    height:50px;
    padding: 0 30px;
}
.nav div a:link ,.nav div a:visited {
    color: #fff;
}
.nav div a:hover {  color: #aaa;}

.nav div a {
    background-color: #444;
    padding: 15px 15px; 
}
.nav div > ul > li {
    height:50px;
    float: left;
    padding: 0px 0px;margin:15px 0;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;
}
.nav div > ul > li:nth-child(n+4)  {
    border-radius:3px 3px 5px 30px;border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
    background-color: #444;
   
    padding: 0px 5px;margin:25px 0 ;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}
.nav div > ul > li:nth-child(n+4) >a {
   
    background-color: #444;
   
    padding: 0px 15px;

}
.nav div > ul > li li {
    padding: 0px 0px;margin:50px 0;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;

}

.nav div ul > li > ul {
    position: absolute;
    left:-9999px;
    background-color: #444;
    border-radius:5px;border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
  margin:15px 0 ;padding: 0px 0px;
}
.nav div > ul > li:hover > ul {left:auto;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover { }
.nav div > ul > li > ul > li:hover > a {padding: 10px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}


.page .rect {
    background-color: #222;
    margin:0 5px;padding: 0 20px;
    border-bottom:1px solid #fff;border-radius: 15px;
}

.page div.archive{font-size: 16px;padding-left: 20px;color: #fff;text-shadow: 0px 6px 4px #000;}

.postedby {width:92%;box-shadow:inset 0px -1px 1px #777;display: inline-block;background-color: #000;padding: 0 2%;margin: 10px 2%;}
.postedby a {margin: 10px;padding:0;float: left;}
.postedby ul {margin: 0;padding:0;}

.sidebar aside {margin:0 5px;padding: 10px 10px;  background-color: #222;box-shadow: 0px 4px 8px #000;}
.sidebar li.widget {border-bottom:5px solid #fff;}


.footer1 {float: left;width:96%;margin:5px 2%;padding: 0px 0px;background-color: #222;box-shadow: 0px 4px 8px #000;}
.footer1 li.widget {float: left;padding: 30px;}


.footer2 {float: left;width:96%;margin:5px 2%;padding: 0px 0px;background-color: #222;box-shadow: 0px 4px 8px #000;}
.footer2 li.widget {float: left;padding:30px;}
.footer2 li.widget:first-child { clear: left;}
.footer2 li.widget:last-child { clear: right;}

.footer3 {float: left;width:96%;margin:5px 2%;padding: 0px 0px;background-color: #222;box-shadow: 0px 4px 8px #000;}
.footer3 li.widget {float: left;padding: 30px;}
.footer3 li.widget:first-child {clear:left;}

@media (max-width: 1200px){

}

.fl-ri{float: right;}
footer img {width: 100%;height: 100px; }
/****************************************************
 *  Push Button
 *****************************************************/
.push_button{
    position:relative;
    width:70%;
    color:#FFF;
    display:block;
    text-decoration:none;
    margin:0 auto;
    border-radius:5px;
    border:solid 1px #D94E3B;
    background:#cb3b27;
    text-align:center;
    padding:20px 30px;
    
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    
    -webkit-box-shadow: 0px 9px 0px #84261a;
        -moz-box-shadow: 0px 9px 0px #84261a;
        box-shadow: 0px 9px 0px #84261a;
}
.rect .push_button a ,.push_button a:link,.push_button a:visited {
    color: #fff;
    text-decoration: none;
}
.rect .push_button{ border-top: solid 5px #fff;}
.rect .push_button a:hover {color:#ccc;}

.oops h1 {
    color:#D94E3B;
    padding: 10px 20px;margin:10px 10px;
    box-shadow:2px 2px 4px #111;
    text-shadow:2px 2px 4px #111;
}

.navbar-fixed-top{top:0;}

</style>

<?php
}
add_action('wp_head','css_customizer' );
 ?>
