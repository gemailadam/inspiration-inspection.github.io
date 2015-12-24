<?php 
// built in sections 
/*
    title_tagline - Site Title & Tagline (and Site Icon in WP 4.3+)
    colors - Colors
    header_image - Header Image
    background_image - Background Image
    nav - Navigation
    static_front_page - Static Front Page
*/

function customize_theme($wp_customize){

// add panel
    $wp_customize->add_panel( 'panel_id', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'panel',
    'description'    => 'ok ok ok ',
));

//background color
    $wp_customize->add_section('Section_BG_ID',array(
        'title' =>'Background' ,
        'description' => 'Change background and container colors or images',
        'priority' => '1' ));

    $wp_customize->add_setting('Background_COLOR_Settings_ID',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'Background_COLOR_Settings_ID',array(
        'label' =>'Background Color',
        'description' =>'Change Background Color',
        'section' => 'Section_BG_ID' ,
        'settings' => 'Background_COLOR_Settings_ID' )));

//background image
    //section Background , id = Section_BG_CLR_ID

    $wp_customize->add_setting('Background_Img_Settings_ID',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'Background_Img_Settings_ID',array(
        'label' =>'Background Image',
        'description' =>'Change Background Image',
        'section' => 'Section_BG_ID' ,
        'settings' => 'Background_Img_Settings_ID' )));



//body bg color
    


// row background color
    $wp_customize->add_setting('row_bg_color_id',array('default' => '' ));

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

    $wp_customize->add_setting('HTML_COLOR_Settings_ID',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'HTML_COLOR_Settings_ID',array(
        'label' =>'Pragraphs COLOR',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'HTML_COLOR_Settings_ID' )));

// a color
   $wp_customize->add_setting('a_color_id',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_color_id',array(
        'label' =>'a colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_color_id' )));



// a link color

    $wp_customize->add_setting('a_link_color_id',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_link_color_id',array(
        'label' =>'linls colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_link_color_id' )));

// a visited color

    $wp_customize->add_setting('a_visited_color_id',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_visited_color_id',array(
        'label' =>'Visited Links Colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_visited_color_id' )));


// a Hover color

    $wp_customize->add_setting('a_hover_color_id',array('default' => '' ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_hover_color_id',array(
        'label' =>'Hover Links Colors',
        'section' => 'Section_CLR_ID' ,
        'settings' => 'a_hover_color_id' )));

// site title visited color
    
    $wp_customize->add_setting('site_title_visited_color_id',array('default' => '' ));

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

    $wp_customize->add_setting('nav_ul_bg_color_id',array('default' => '' ));

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

/* roots.css */
html {
  color:white;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

/**/

html a:link {color: #fff;}

html p{color: #fff;}
/**/


body {
    background-color: #222;
    padding:0;margin:0;

 }
a:link {color: #fff;}
a:visited {color: #aaa;}
a:hover {color: #999;}


ul,li {list-style: none;padding: 0;margin: 0;}


/* essential classes */
/* essential classes */

.gap {clear:both;}
.container { } 
.row {background-color: #222;}

/* header.css*/
section.site-title a:visited {color: #fff;}
section.site-title a {
    color:#fff;
    font-size: 25px;
    text-decoration: none;
    font-weight: bold;
    padding: 0 80px;
    text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,
    0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444,
     0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,
     0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,
     0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,
     0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,
     0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
}
section.site-title p a {
    font-size: 30px;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;margin: 0 10px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px #444;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;      
    
}

/**/
section.site-title p a:link{color: #fff;}

section.site-title a:link{color: #fff;}

/**/

.banner {position: relative;}

.banner img {width:90%;margin:10px 5%;/*position: absolute;*/
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px  #444 , 0px 20px 25px #000;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;      
      text-shadow: 0px 7px 0 #444, 0px 6px 0 #444, 0 5px 0 #444,0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
    }


img#shadow { width:90%;margin:10px 5%;position:relative;z-index: -10;}

img#btn { width:12%;margin:10px 5%;position:absolute;left:75%;top:460px;}
img#logo {position: absolute;width:12%;margin-right:0px;margin-top: 10px;box-shadow:5px 5px 40px #000;z-index: 10;}

.circlarrow:hover {color: #ff7f00;}

/* slideshow */
a,.galleryThumbnil img{
transition:all 150 ms linear;
-webkit-transition:all 150 ms linear;
-moz-transition:all 150 ms linear;

}


.gallerycontainer{
    margin: 40px auto;
    /*width: 900px;*/
}

.galleryPreviewContainer {
    position: relative;
}

.galleryPreviewImage img{/*that mean all images disappear exept img.previewImage1 [Next]*/
    /*display: none;/* new cut*/
    position: absolute;/* new change - prev > position: relative;*/
    top:0;
    left:0;
    box-shadow: ;
-webkit-border-top-left-radius: 10px;
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius:30px;
-webkit-border-bottom-left-radius: 30px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 30px;
-moz-border-radius-bottomleft: 30px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 30px;
border-bottom-left-radius: 30px;
}

img.previewImage1 {
    /*display: block;/* new cut*/
}
/*
.galleryThumbnilContainer{
    width:900px;
    overflow-x:auto;
    margin-top: 30px;
    margin-bottom: 40px;
    padding: 20px 0; 
}
.galleryThumbnil {
    width: 2600px;
}
.galleryThumbnil img {
    margin-right: 10px;
    top:0;
    border-radius: 20px;    
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border:4px solid #222 ;
    position: relative;
}
.galleryThumbnil a:hover img {
    top:-5px;
    border:4px solid #333;
}

.galleryThumbnil a.active img {
    
    border:2px solid #ff7f00;
}
*/


.gallerydescription > div {
    display: none;
    position: absolute;
    bottom:-1500%;
    left:5.1%;
    width:80%;
background-color:rgba(0, 0, 0, 0.4);
padding:2% 5%;margin: 0;

}

.gallerydescription > div a  {
display: block;
}
.gallerydescription > div input {
color: #fff;
background-color: #222;
border-radius: 3px;
border:2px solid #444;
box-shadow: 2px 2px 4px #000;
}
.gallerydescription > div input:hover {
box-shadow: 0 0 0 #000;
    
}
.gallerydescription > div.visible {
    display: block;
}
.galleryPreviewarrow a {
    font-family: arial,sans-serif;
    font-size: 30px;
    background-color:rgba(0,0,0,0.3);
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: block;
    text-align: center;
    color: #fff;
    text-decoration: none;
    border-radius: 100px;/*35px because of 70px width and height*/
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
    position: absolute;
    left:60px;
    top:200px; /* new *//* top:50%;*/
    margin-top: -35px;

    
}
a.nextslidearrow{
    right: 60px;
    left:auto;
}
.galleryPreviewarrow a:hover {
    background-color: #000;
    margin-top: -40px;
}
.galleryNavigationBullets {
    text-align: center;
    margin:20px auto 60px auto;
    position: relative;/* new */
    top:420px;/* new */

}
.galleryNavigationBullets span {
    display: none;
}
.galleryNavigationBullets a {
    background-color: #ddd;
    width:20px;
    height: 20px;
    display: inline-block;
    margin-right: 5px;
    border-radius: 35px;/* new */
}
.galleryNavigationBullets a:hover ,.galleryNavigationBullets a.active {
    background-color:#555;
}



/* navbar.css*/
.nav div {
    height:50px;
    width:90%;
    padding: 0px;margin: 0px auto ;
    border-radius:2px 2px 30px 30px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;

    }

.nav div > ul {
    background-color: #444;
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

/*navbar Primary */
.navbar-fixed-top{top:0;}


/*page.css*/
div.page .rect {
    background-color: #222;
    margin:0 5px;padding: 0 20px;
    border-bottom:1px solid #fff;border-radius: 15px;
}

.page div.archive{font-size: 16px;padding-left: 20px;color: #fff;text-shadow: 0px 6px 4px #000;}



.postedby {width:92%;box-shadow:inset 0px -1px 1px #777;display: inline-block;background-color: #000;padding: 0 2%;margin: 10px 2%;}
.postedby a {margin: 10px;padding:0;float: left;}
.postedby ul {margin: 0;padding:0;}

.rect .push_button a ,.push_button a:link,.push_button a:visited {
    color: #fff;
    text-decoration: none;
}
.rect .push_button{ border-top: solid 5px #fff;}
.rect .push_button a:hover {color:#ccc;}



/* 404 */
/* 404 */

.oops h1 {
    color:#D94E3B;
    padding: 10px 20px;margin:10px 10px;
    box-shadow:2px 2px 4px #111;
    text-shadow:2px 2px 4px #111;
}

/* sidebar.css*/

div.sidebar aside {margin:0 5px;padding: 10px 10px;  background-color: #222;box-shadow: 0px 4px 8px #000;}
.sidebar li.widget {border-bottom:5px solid #fff;}

/* new 20151205 */

#searchsubmit {color: #222;}
#s {color: #222;}
/* end new 20151205 */

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


/* footer.css */


section.footer1 {float: left;width:96%;margin:5px 2%;padding: 0px 0px;background-color: #222;box-shadow: 0px 4px 8px #000;}
section.footer1 li.widget {float: left;padding: 30px;}


section.footer2 {float: left;width:96%;margin:5px 2%;padding: 0px 0px;background-color: #222;box-shadow: 0px 4px 8px #000;}
section.footer2 li.widget {float: left;padding:30px;}
section.footer2 li.widget:first-child { clear: left;}
section.footer2 li.widget:last-child { clear: right;}

section.footer3 {float: left;width:96%;margin:5px 2%;padding: 0px 0px;background-color: #222;box-shadow: 0px 4px 8px #000;}
section.footer3 li.widget {float: left;padding: 30px;}
section.footer3 li.widget:first-child {clear:left;}


.fl-ri{float: right;}
footer img {width: 100%;height: 100px; }

/* sitemap.css */

.wrapper{position: relative;width: 100%;}
img.sitemap {
    position: absolute;
    z-index: 1;
    margin:0 auto;
    padding: 0;
    width: 100%;    

}
img.sitemapback {
    position: relative;
    z-index: -1;
    margin:0 auto;
    padding: 0;
    width: 100%;    

}

.maplinks table {
    z-index: 1;
    width:98%;
    position: relative;
    padding: 0px;margin: 0px auto 20px auto ;
    -webkit-border-top-left-radius: 10px;
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius:30px;
-webkit-border-bottom-left-radius: 30px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 30px;
-moz-border-radius-bottomleft: 30px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 30px;
border-bottom-left-radius: 30px;
    box-shadow: 0px 6px 0px #444,0px -3px 0px #444,0px 20px 15px #111,0px -6px 15px #111;;
}

.maplinks table tr td {width: 20%;}
.maplinks table tr {float: none;}
#gmap{position: relative;}
.tabs {text-align: center;}
.tabs a {
    color:#ff0033;
    box-shadow: 2px 2px 4px #000,-2px -2px 4px #000;
    margin: 0 auto;
    padding: 2px 5px;
    text-align: center;
    text-shadow:2px 2px 4px #000;
    background-color:rgba(0,0,0,0.2); 
}
.tabs a:hover {
    box-shadow: 1px 1px 0px #000;
}
.description p {    
    background-color:rgba(0,0,0,0.3);
    padding: 2% 2%;
}
#portfolioID {box-shadow: 2px 2px 0px #000;border-radius: 5px;border: 2px solid #ff0033;text-align: center;color:black;}
#articlesID {box-shadow: 2px 2px 0px #000;border-radius: 5px;border: 2px solid #ff0033;text-align: center;color:black;}
#portfolioID {
    width:60%;
    display: block;
    margin-left: auto;
    margin-right: auto; }
#articlesID {
    width:60%;
    margin-left: auto;
    margin-right: auto; }



@media (max-width: 700px){
.site-title a {font-size: 20px;padding: 0 20px;}
.site-title p a {font-size: 25px;padding: 5px 10px;}    

}

@media (max-width: 500px){
.site-title a {font-size: 15px;padding: 0 20px;}
.site-title p a {font-size: 15px;padding: 5px 10px;}

.cut {display: none;}   

}


/* page.css*/
/* page.css*/
/*
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
*/


@media (max-width: 1200px){

}

/* out */
/* inline-block = float:left + clear both*/
/*
.floating-box {
    float: left;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;
}

.after-box {
    clear: left;
}
*/
 /* equal == */
 /*
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;
}
*/
/* out */
/* inline-block = float:left + clear both*/
/*
.floating-box {
    float: left;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;
}

.after-box {
    clear: left;
}
*/
 /* equal == */
 /*
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;
}
*/


/**************************************************************************************/
/**************************************************************************************/

/*  slideshow */
/*  slideshow */
/*  slideshow */

/*
body{padding: 0;margin:0;}
*/

</style>

<?php
}
add_action('wp_head','css_customizer' );
 ?>




