
/*
++++++++++++++++++++++++++++++++++++++++++
+++             ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++              ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++              ++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++
*/



<style type="text/css">



/* roots.css root_part_qwe */

html a:link {color: #fff;}
html p{color:<?php echo get_theme_mod('p_id','#fff'); ?>;}
/*html {color:#000;}*/
html {
  /*color:<?php echo get_theme_mod('html_id','#fff'); ?>;*/
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

p{}

body{background-color:#014347;/*<?php echo get_theme_mod('body_id','#4F0101'); ?>;*/}
body {padding:0;margin:0;}

a:link {color:<?php echo get_theme_mod('a_id','#fff'); ?>;}
a:visited {color:<?php echo get_theme_mod('a_visited_id','#aaa'); ?>;}
a:hover {color:<?php echo get_theme_mod('a_hover_id','#999'); ?>;}
a:link {color: #000;}
a:visited {color: #777;}
a:hover {color: #555;}';

ul , li {list-style: none; padding: 0;margin: 0;}

/* essential classes */
.gap {clear:both;}
.container { } 
.row {background-color:#014347;/*<?php echo get_theme_mod('row_id','#4F0101'); ?>;*/}


/* header.css header_part_qwe*/

header ul,header li{list-style: none;}

section.site-title a{color:#bbb;/*<?php echo get_theme_mod('site_title_id','#000'); ?>;*/}
section.site-title p a:link{}
section.site-title a:link{}
section.site-title a:visited{/*<?php echo get_theme_mod('site_title_visited_id','#222'); ?>;*/}

section.site-title a {
    /*color:<?php echo get_theme_mod('site_title_id','#fff'); ?>;*/
    font-size: 120%;
    text-decoration: none;
    font-weight: bold;
    padding: 0 80px;
/*    text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,
    0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444,
     0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,
     0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,
     0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,
     0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,
     0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
*/
}
section.site-title .title-description a:link {}
section.site-title .title-description a:visited {color:#eee;}

section.site-title p a {
	color:#fff;/*<?php echo get_theme_mod('site_title_p_a_id','#000'); ?>;*/
    font-size: 160%;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;margin: 0 10px;

    box-shadow: 0px 4px 0px #0296a1;
    -webkit-box-shadow: 0px 9px 0px #0296a1;
        -moz-box-shadow: 0px 9px 0px #0296a1;   

}

.banner {position: relative;}

.banner img {width:90%;margin:10px 5%;/*position: absolute;*/
    /*border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px  #444 , 0px 20px 25px #000;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;      */
      text-shadow: 0px 7px 0 #444, 0px 6px 0 #444, 0 5px 0 #444,0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
    }


img#shadow { width:90%;margin:10px 5%;position:relative;z-index: -10;}

img#btn { width:12%;margin:10px 5%;position:absolute;left:75%;top:460px;}
img#logo {position: absolute;width:12%;margin-right:0px;margin-top: 10px;box-shadow:5px 5px 40px #000;z-index: 10;}

.circlarrow:hover {color: #ff7f00;}

/* slideshow slideshow_part_qwe */


.circlarrow:hover {color: #ff7f00;}

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
      display: none;/* new cut*/
    width: 90%;
    position: absolute;/* new change - prev > position: relative;*/
    top:0;
    left:0;
    box-shadow:  0px 10px 10px #111;
    border: 1px solid #0296a1;
    -webkit-border-top-left-radius: 0px;
    -webkit-border-top-right-radius: 0px;
    -webkit-border-bottom-right-radius:0px;
    -webkit-border-bottom-left-radius: 0px;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright: 0px;
    -moz-border-radius-bottomright: 0px;
    -moz-border-radius-bottomleft: 0px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
}

img.previewImage1 {
    display: block;/* new cut*/
}

.gallerydescription > div {
    /*display: none;*/
    margin: 0;
    padding:1% 5% 0 5%;
    background-color:rgba(0, 0, 0, 0.4);
    position: absolute;
    border-radius: 0px 0px 0px 0px;
    top:60%;
    left:5%;
    width:80%;

}

.gallerydescription > div a  {
    display: block;
    font-size:100%;
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
    /*font-size: 30px;*/
    z-index: 0;
    font-size: 200%;
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
    top:160px; /* new *//* top:50%;*/

    
}

a.nextslidearrow{
    right: 60px;
    left:auto;
}

.galleryPreviewarrow a:hover {
    background-color: #000;
    /*margin-top: -40px;*/
}

.galleryNavigationBullets {
    text-align: center;
    margin:30px auto 30px auto;


}

.galleryNavigationBullets span {
    display: none;
}

.galleryNavigationBullets a {
    /*background-color: #ddd;*/
    width:20px;
    height: 20px;
    display: inline-block;
    margin-right: 5px;
    border:solid 1px #0296a1;
}

.galleryNavigationBullets a:link{background: #fff;box-shadow: 2px 2px 4px #000;border:2px solid #0296a1;}

.galleryNavigationBullets a:hover ,.galleryNavigationBullets a.active {
    background-color:#015D63;border:1px solid #fff;
}



/* navbar.css nav_part_qwe*/

.nav div {
    margin: 0px auto ;
    padding: 0px;
    height:50px;
    width:90%;
        border-radius:5px;
    border:solid 1px #0296a1;
    box-shadow: 0px 6px 0px #015D63,0px 20px 15px #111;
}



.nav div > ul {
    padding: 0 30px;
    background-color:;/*<?php echo get_theme_mod('nav_ul_id','#5D030D'); ?>;*/
    /*border-radius:3px 3px 30px 30px;*/
    height:50px;
    list-style: none;
}
.nav div a:link ,.nav div a:visited {
    color:#fff; /*<?php echo get_theme_mod('nav_a_color_id','#fff'); ?>;*/
}
.nav div a:hover {  color:#aaa;/*<?php echo get_theme_mod('nav_a_hover_id','#aaa'); ?>;*/}

.nav div a {
    padding: 15px 15px; 
    background-color:#015D63;/*<?php echo get_theme_mod('nav_a_id','#5D030D'); ?>;*/
}
.nav div > ul > li {
    margin:2px 1px;
    padding: 0px 0px;
    background-color:#015D63;/*<?php echo get_theme_mod('nav_ul_li_id','#5D030D'); ?>;*/
    height:50px;
    float: left;
    text-shadow: 0px 7px 0 #015D63, 0px 6px 0 #015D63, 0 5px 0 #015D63,0 4px 0 #015D63, 0 3px 0 #015D63, 0 2px 0 #015D63, 0 1px 0 #015D63;
    /*border-radius:3px 3px 5px 30px;*/
        border-radius:5px;
    border:solid 1px #0296a1;
    box-shadow: 0px 6px 0px #014347,0px 20px 15px #111;

	list-style: none;
}


.nav div > ul > li >a {
    padding: 0px 15px;

    background-color:#015D63;/*<?php echo get_theme_mod('nav_ul_li_id','#5D030D'); ?>;*/
}
.nav div > ul > li li {
    margin:50px 0;
    padding: 0px 0px;
    text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;
    background-color:#015D63;/*<?php echo get_theme_mod('nav_ul_li_id','#5D030D'); ?>;*/
}

.nav div ul > li > ul {
    margin:15px 0 ;
    padding: 0px 0px;
    background-color:#015D63;/*<?php echo get_theme_mod('nav_ul_li_ul_id','#5D030D'); ?>;*/
    position: absolute;
    left:-9999px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #444,0px 20px 15px #111;
}
.nav div > ul > li:hover > ul {left:auto;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover { }
.nav div > ul > li > ul > li:hover > a {padding: 10px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}

/*navbar Primary */
.navbar-fixed-top{top:0;}





/*page.css page_part_qwe*/



.page .rect img {width: 100%;height: auto;}

div.page .rect {color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}
div.page .rect {
    margin:0 5px;
    padding: 0 20px;
    background-color:#015D63;/*<?php echo get_theme_mod('page_id','#5D030D'); ?>;*/
    border-bottom:;/*<?php echo get_theme_mod('page_border_id','#fff'); ?>;*/
    border-radius: 15px;
}

.page div.archive{font-size: 16px;padding-left: 20px;color: #fff;text-shadow: 0px 6px 4px #000;}
.page div.archive{/*color: #000;*/}



.postedby {
    margin: 10px 2%;
    padding: 0 2%;
    background-color:<?php echo get_theme_mod('postedby_id','#000'); ?>;
    width:92%;
    box-shadow:inset 0px -1px 1px #777;
    display: inline-block;
}
.postedby a {margin: 10px;padding:0;float: left;}
.postedby ul {margin: 0;padding:0;}



.rect .push_button a ,.push_button a:link,.push_button a:visited {color: #000;}
.rect .push_button{ border-top: solid 5px #000;}
.rect .push_button a:hover {color:#444;}



.rect .push_button a ,.push_button a:link,.push_button a:visited {
    text-decoration: none;
}
/*.rect .push_button{ border-top: solid 5px #fff;}*/
/*.rect .push_button a:hover {color:#ccc;}*/





/* sidebar.css sidebar_part_qwe*/

.sidebar ul , .sidebar li {list-style: none;}

div.sidebar aside {
    margin:0 5px;
    padding: 10px 10px;
    background-color:#015D63;/*<?php echo get_theme_mod('sidebar_id','#5D030D'); ?>;*/
    box-shadow: 0px 4px 8px #000;
}
div.sidebar aside {color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}

/*.sidebar li.widget {border-bottom:5px solid #fff;}*/
.sidebar li.widget {border-bottom:5px solid #000;}

.sidebar li h2.widgettitle {color: #fff;}
.sidebar select {color: #000;}
.sidebar input {color: #000;}
/* new 20151205 */

#searchsubmit {color: #222;}
#s {color: #222;}
/* end new 20151205 */

/****************************************************
 *  Push Button
 *****************************************************/
div.sidebar .push_button{
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
    


/* footer.css fopoter_part_qwe*/

footer ul , footer li {list-style: none;}

section.footer1 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:#015D63;/*<?php echo get_theme_mod('footer1_id','#5D030D'); ?>;*/
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
    color: #000;
    border:1px solid #0296a1;
    /*box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;*/
}

section.footer1 li.widget {float: left;padding: 30px;}


section.footer2 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:#015D63;/*<?php echo get_theme_mod('footer2_id','#5D030D'); ?>;*/
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
    color: #000;
    border:1px solid #0296a1;
    /*box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296a1;*/
}
section.footer2 li.widget {float: left;padding:30px;}
section.footer2 li.widget:first-child { clear: left;}
section.footer2 li.widget:last-child { clear: right;}

section.footer3 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:#015D63;/*<?php echo get_theme_mod('footer3_id','#5D030D'); ?>;*/
    width:96%;
    float: left;
    box-shadow: 0px 4px 8px #000;
    color: #000;
    border:1px solid #0296a1;
/*box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296a1;*/
}
section.footer3 li.widget {float: left;padding: 30px;}
section.footer3 li.widget:first-child {clear:left;}


.fl-ri{float: right;}
footer .blur img {width: 100%;height: 100px;display: none; }


footer .copyright p {color: #fff;}




/* 404 404_part_qwe*/

.oops h1 {
    /*color:#D94E3B;*/
    padding: 10px 20px;margin:10px 10px;
    /*box-shadow:2px 2px 4px #111;*/
    /*text-shadow:2px 2px 4px #111;*/
}


.oops h1 {color:#000;box-shadow:2px 2px 4px #111;text-shadow:2px 2px 4px #111;}




/* sitemap.css sitemap_part_qwe*/

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
#gmap{position: relative;z-index: 1;}
.map {z-index: 2;}
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
.description {}    
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




/* curasul_part_qwe */

.gallerythumContainer {
    margin:1% 4% 2% 4%;
    padding: 1% 1%;
    /*border-radius: 20px 20px 50px 50px;*/
    float: left;
    width: 90%;
      /*-moz-box-shadow:    inset 0 0 10px #000000;*/
   /*-webkit-box-shadow: inset 0 0 10px #000000;*/
   /*box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;*/
    /*border: 1px solid #666;*/
}

.galleryThumbnil img {
    margin:10px 2%;
    padding: 2% 2%;
    border-radius: 5px 5px 5px 5px;
    width:92%;
    float: left;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #0296a1;
}
.thumbwrapper{float: left;width: 33%;}

.gallerythumContainer input {
    margin-left: 4%;
    /*margin-bottom: 0;*/
           -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:0 5px 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #0296a1;

    color: #fff;
    text-align: center;
    background-color: #222;
    width:30%;
    height: 25px;
    border-radius: 2px;
}
.des p{
    margin:0px 4%;
    padding: 0% 2%;
    
}



/* media.css media_part_qwe */

/* media_part_lte_768__qwe */

@media (max-width: 768px){

.gallerythumContainer {
/*        margin:0px 1%;
    padding: 1% 1%;
    border-radius: 0px 0px 0px 0px;
    float: left;
    
      -moz-box-shadow: 0 0 0 #000000;
   -webkit-box-shadow: 0 0 0 #000000;
   box-shadow:0 0 0 #000000 ;
    border: 0px solid #666;
*/}

    .thumbwrapper {
/*    margin:0px 1%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    float: left;
*/    width:45%;
/*      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;

    border: 1px solid #0296a1;
*/    }

}


/* media_part_lte_500__qwe */

@media (max-width: 500px){
    .thumbwrapper {
    margin:10px 1%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    width:92%;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
     }

}

/* media_part_lte_992__qwe */

@media (max-width: 992px){
.galleryPreviewarrow a {width: 60px;height: 60px;line-height: 60px;top:110px;}
.gallerydescription > div{top:55%;}
.gallerydescription > div a{font-size:80%;line-height: 10px;}
.gallerydescription > div input{font-size:80%;}

}

/* media_part_lte_768__qwe */


@media (max-width: 750px){
.galleryPreviewarrow a {width: 50px;height: 50px;line-height: 50px;top:95px;}
.gallerydescription > div{top:53%;}
.gallerydescription > div a{font-size:80%;}
.gallerydescription > div a{line-height: 20px;}
.gallerydescription > div input{font-size:70%;}
section.site-title p a {font-size: 100%; }
section.site-title a {font-size: 100%;padding: 0 10px;}
}


@media (max-width: 620px){
.galleryPreviewarrow a {width: 50px;height: 50px;line-height: 50px;top:95px;}
.gallerydescription > div{top:45%;}
.gallerydescription > div a{font-size:80%;}
.gallerydescription > div a{line-height: 20px;}
.gallerydescription > div input{font-size:70%;}
section.site-title p a {font-size: 100%; }
section.site-title a {font-size: 100%;padding: 0 10px;}
}

@media (max-width: 500px){
section.site-title p a {font-size: 80%;}
section.site-title a {font-size: 80%;padding: 0 10px;}
.galleryPreviewarrow a {top:40px;font-size: 80%;width: 40px;height: 40px;line-height: 40px;}
.galleryPreviewarrow a:hover {top:60px;}
.gallerydescription > div{top:40%;}
.gallerydescription > div a{font-size:70%;}
.gallerydescription > div a{line-height: 4px;}
.gallerydescription > div input{font-size:60%;}
.galleryNavigationBullets a{width: 15px;height: 15px;}

.nav {}
.cut {display: none;}   

}

@media (max-width: 340px){
section.site-title p a {font-size: 70%;}
section.site-title a {font-size: 70%;padding: 0 10px;text-shadow:0 0 0;}
.galleryNavigationBullets a{width: 10px;height: 10px;text-shadow:0 0 0;}

.gallerydescription > div {
    /*display: none;*/
    margin: 0;
    padding:0 5% 0 5%;
    background-color:rgba(0, 0, 0, 0.4);
    position: absolute;
    border-radius: 0px 0px 30px 30px;
    top:40%;
    left:5%;
    width:80%;

}

.gallerydescription > div a  {
    display: block;
    font-size:70%;
}


}


/* media_part_lte_1200__qwe */


@media (max-width: 1200px){

}


/* media_part_lte_500__qwe */


@media (max-width: 747px){
.page h1 {margin-top:60px;}

/* navbar.css*/
.nav div {
    margin: 0px auto ;
    padding: 0px;
    width: 30%; 
position: absolute;

    }

.nav div > ul {
    padding: 0;
    /*background-color:<?php echo get_theme_mod('nav_ul_id','#444'); ?>;*/
    /*border-radius:3px 3px 30px 30px;*/
    width: 100%;
}
.nav div > ul:hover li{display: block;margin-top: 0;}


.nav div > ul > li:first-child{
display: inline-block;
}

.nav div a {
    padding: 0px 15px; 
    /*background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;;*/
}
.nav div > ul > li {
    margin: 0;
    padding: 0px 0px;
    /*background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
    height:50px;
    width: 100%;
    float: left;

    display: none;

    /*border-radius:3px 3px 30px 5px;*/
    /*border:solid 1px #ccc;*/
    /*box-shadow: 0px 6px 0px #444,0px 20px 15px #111;*/
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/

}

.nav div > ul > li >a {
    padding: 0px 15px;
    background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;
}
.nav div > ul > li:nth-child(n+4)  {
    margin: 0;
    padding: 0px 5px;
    /*background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
    /*border-radius:3px 3px 5px 30px;*/
    /*border:solid 1px #ccc;*/
    /*box-shadow: 0px 6px 0px #444,0px 20px 15px #111;*/
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/

}
.nav div > ul > li:nth-child(n+4) >a {
    padding: 0px 15px;
    /*background-color:#015D63;<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
}

.nav div > ul > li >li {
    margin:0px 0;
    padding: 0px 0px;
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/

}

.nav div ul > li > ul {
    margin:0px 0 ;
    padding: 0px 0px;
    /*background-color:#444;<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
    position: absolute;
    left:-9999px;
    border-radius:5px;
    /*border:solid 1px #ccc;*/
    /*box-shadow: 0px 6px 0px #444,0px 20px 15px #111;*/
}
.nav div > ul > li:hover > ul {left:30%;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover {}
.nav div > ul > li > ul > li:hover > a {padding: 0px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}

}

/* custome_part_qwe */

.box_shadow_qwe{box-shadow:1px 1px 12px #000;}
.box_shadow_qwe a:hover{box-shadow:0px 0px 0px #000,0px 0px 0px #000;}

    </style>
 
 <?php 

    break;

    case 'green';

    break;

    case 'YELLOW';


    break;

    case 'orange';


    break;

    case 'black';


/*
++++++++++++++++++++++++++++++++++++++++++
+++             ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++              ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++++++++++++    ++++++++++++++++++++++++++
++              ++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++
*/


?>
<!---->
<style type="text/css">



/* roots.css root_part_qwe */

html {
  /*color:#000;*/
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}


body{background-color:#000;/*<?php echo get_theme_mod('body_id','#4F0101'); ?>;*/}
body {padding:0;margin:40px 0;}

/*a:link {color:<?php echo get_theme_mod('a_id','#fff'); ?>;}
a:visited {color:<?php echo get_theme_mod('a_visited_id','#aaa'); ?>;}
a:hover {color:<?php echo get_theme_mod('a_hover_id','#999'); ?>;}
*/


a:link {color: #000;}
a:visited {color: #777;}
a:hover {color: #555;}

p{color:;/*<?php echo get_theme_mod('p_id','#fff'); ?>;*/}

ul , li {list-style: none; padding: 0;margin: 0;}

/* essential classes */
.gap {clear:both;}
.container > .col-xs-12{
  border: 1px solid #fff;
box-shadow: -2px 0 12px 2px #333,2px 0 12px 2px #333;
} 
.row {
background-color:#000;/*<?php echo get_theme_mod('row_id','#4F0101'); ?>;*/
 /*box-shadow: 2px 2px 12px #444;border: 1px solid #fff;*/
 }




/* header.css header_part_qwe*/

header ul,header li{list-style: none;}

section.site-title a{color:#bbb;/*<?php echo get_theme_mod('site_title_id','#000'); ?>;*/}
section.site-title p a:link{}
section.site-title a:link{}
section.site-title a:visited{/*<?php echo get_theme_mod('site_title_visited_id','#222'); ?>;*/}

section.site-title a {
    /*color:<?php echo get_theme_mod('site_title_id','#fff'); ?>;*/
    font-size: 120%;
    text-decoration: none;
    font-weight: bold;
    padding: 0 80px;
/*    text-shadow: 0px 1.1px 0 #444, 0px 1.3px 0 #444,
    0px 1.5px 0 #444,0px 1.7px 0 #444,0px 2.1px 0 #444,
     0px 2.3px 0 #444,0px 2.5px 0 #444,0px 2.7px 0 #444,
     0px 3.1px 0 #444, 0px 3.3px 0 #444,0px 3.5px 0 #444,
     0px 3.7px 0 #444,0px 4.1px 0 #444, 0px 4.3px 0 #444,
     0px 4.5px 0 #444,0px 4.7px 0 #444, 0 5px 0 #444,
     0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
*/
}
section.site-title .title-description a:link {}
section.site-title .title-description a:visited {color:#eee;}

section.site-title p a {
    color:#fff;/*<?php echo get_theme_mod('site_title_p_a_id','#000'); ?>;*/
    font-size: 160%;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;margin: 0 10px;

/*    box-shadow: 0px 4px 0px #fff;
    -webkit-box-shadow: 0px 9px 0px #fff;
        -moz-box-shadow: 0px 9px 0px #fff;   
*/
}

.banner {position: relative;}

.banner img {width:90%;margin:10px 5%;/*position: absolute;*/
    /*border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 9px 0px  #444 , 0px 20px 25px #000;
    -webkit-box-shadow: 0px 9px 0px #444;
        -moz-box-shadow: 0px 9px 0px #444 ;      */
/*      text-shadow: 0px 7px 0 #444, 0px 6px 0 #444, 0 5px 0 #444,0 4px 0 #444, 0 3px 0 #444, 0 2px 0 #444, 0 1px 0 #444;
*/    }


img#shadow { width:90%;margin:10px 5%;position:relative;z-index: -10;}

img#btn { width:12%;margin:10px 5%;position:absolute;left:75%;top:460px;}
img#logo {position: absolute;width:12%;margin-right:0px;margin-top: 10px;box-shadow:5px 5px 40px #000;z-index: 10;}

.circlarrow:hover {color: #ff7f00;}

/* slideshow slideshow_part_qwe */


.circlarrow:hover {color: #ff7f00;}

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
      display: none;/* new cut*/
    width: 90%;
    position: absolute;/* new change - prev > position: relative;*/
    top:0;
    left:0;
    box-shadow:  0px 10px 10px #111;
    border: 1px solid #fff;
    -webkit-border-top-left-radius: 0px;
    -webkit-border-top-right-radius: 60px;
    -webkit-border-bottom-right-radius:0px;
    -webkit-border-bottom-left-radius: 60px;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright: 60px;
    -moz-border-radius-bottomright: 0px;
    -moz-border-radius-bottomleft: 60px;
    border-top-left-radius: 0px;
    border-top-right-radius: 60px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 60px;
}

img.previewImage1 {
    display: block;/* new cut*/
}

.gallerydescription > div {
    /*display: none;*/
    margin: 0;
    padding:1% 5% 0 5%;
    background-color:rgba(0, 0, 0, 0.4);
    position: absolute;
    border-radius: 0px 90px 0 90px;
    top:50%;
    left:15%;
    width:20%;
    height: 30%;

}

.gallerydescription > div a  {
    display: block;
    font-size:100%;
}

.gallerydescription > div input {
    color: #000;
    background-color: #fff;
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
    /*font-size: 30px;*/
    z-index: 0;
    font-size: 200%;
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
    top:160px; /* new *//* top:50%;*/

    
}

a.nextslidearrow{
    right: 60px;
    left:auto;
}

.galleryPreviewarrow a:hover {
    background-color: #000;
    /*margin-top: -40px;*/
}

.galleryNavigationBullets {
    text-align: center;
    margin:30px auto 30px auto;


}

.galleryNavigationBullets span {
    display: none;
}

.galleryNavigationBullets a {
    /*background-color: #ddd;*/
    width:20px;
    height: 10px;
    display: inline-block;
    margin-right: 5px;
    border:solid 1px #fff;
}

.galleryNavigationBullets a:link{background: #ddd;box-shadow: 2px 2px 4px #000;border:2px solid #444;}

.galleryNavigationBullets a:hover ,.galleryNavigationBullets a.active {
    background-color:#fff;border:1px solid #000;
}



/* navbar.css nav_part_qwe*/

.nav div {
    margin: 0px auto ;
    padding: 0px;
    height:50px;
    width:90%;
    
    /*border-radius:5px;*/
    /*border:solid 1px #fff;*/
    /*box-shadow: 0px 6px 0px #fff,0px 20px 15px #111;*/
}



.nav div > ul {
    padding: 0 30px;
    background-color:;/*<?php echo get_theme_mod('nav_ul_id','#5D030D'); ?>;*/
    /*border-radius:3px 3px 30px 30px;*/
    height:50px;
    list-style: none;
}
.nav div a:link ,.nav div a:visited {
    color:#000; /*<?php echo get_theme_mod('nav_a_color_id','#fff'); ?>;*/
}
.nav div a:hover {  color:#aaa;/*<?php echo get_theme_mod('nav_a_hover_id','#aaa'); ?>;*/}

.nav div a {
    padding: 15px 15px; 
    background-color:#fff;/*<?php echo get_theme_mod('nav_a_id','#5D030D'); ?>;*/
}
.nav div > ul > li {
    margin:2px 1px;
    padding: 0px 0px;
    background-color:#fff;/*<?php echo get_theme_mod('nav_ul_li_id','#5D030D'); ?>;*/
    height:50px;
    float: left;
    text-shadow: 0px 7px 0 #fff, 0px 6px 0 #fff, 0 5px 0 #fff,0 4px 0 #fff, 0 3px 0 #fff, 0 2px 0 #fff, 0 1px 0 #fff;
    /*border-radius:3px 3px 5px 30px;*/
        border-radius:5px;
    border:solid 1px #fff;
    box-shadow: 0px 6px 0px #000,0px 20px 15px #222,3px 0px 5px #222,-3px 0px 5px #222;

    list-style: none;
}

.nav div > ul > li:hover {
        border-radius:5px;
    border:solid 1px #fff;
    box-shadow: 0px 0px 0px #000,0px 20px 15px #111;

}


.nav div > ul > li >a {
    padding: 0px 15px;

    background-color:#fff;/*<?php echo get_theme_mod('nav_ul_li_id','#5D030D'); ?>;*/
}
.nav div > ul > li li {
    margin:50px 0;
    padding: 0px 0px;
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/
    background-color:#fff;/*<?php echo get_theme_mod('nav_ul_li_id','#5D030D'); ?>;*/
}

.nav div ul > li > ul {
    margin:30px 0 ;
    padding: 0px 0px;
    background-color:#fff;/*<?php echo get_theme_mod('nav_ul_li_ul_id','#5D030D'); ?>;*/
    position: absolute;
    left:-9999px;
    border-radius:5px;
    border:solid 1px #ccc;
    box-shadow: 0px 6px 0px #000,0px 10px 15px #222;
}
.nav div > ul > li:hover > ul {left:auto;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover { }
.nav div > ul > li > ul > li:hover > a {padding: 10px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}

/*navbar Primary */
.navbar-fixed-top{top:0;}




/* curasul_part_qwe */

.gallerythumContainer {
    margin:1% 4% 2% 4%;
    padding: 1% 1%;
    /*border-radius: 20px 20px 50px 50px;*/
    float: left;
    width: 90%;
      /*-moz-box-shadow:    inset 0 0 10px #000000;*/
   /*-webkit-box-shadow: inset 0 0 10px #000000;*/
   /*box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;*/
    /*border: 1px solid #666;*/
}

.galleryThumbnil img {
    margin:10px 2%;
    padding: 2% 2%;
    border-radius: 0px 20px 0px 20px;
    width:92%;
    float: left;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #fff;
}
.thumbwrapper{float: left;width: 33%;}

.gallerythumContainer input {
    margin-left: 4%;
    /*margin-bottom: 0;*/

    border: 2px solid #444;

    color: #000;
    text-align: center;
    background-color: #fff;
    width:30%;
    height: 25px;
    border-radius: 0px 8px 0px 8px;
}

.gallerythumContainer input:hover {
    margin-left: 4%;
    /*margin-bottom: 0;*/

           -moz-box-shadow:0 0 10px #333;
   -webkit-box-shadow:0 0 10px #333;
   box-shadow:inset 2px 2px 2px #000 ,inset 3px 3px 5px #222;
       border: 2px solid #fff;

}
.des p{
    margin:0px 4%;
    padding: 0% 2%;
    
}





/*page.css page_part_qwe*/



.page .rect img {width: 100%;height: auto;}

div.page .rect {color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #fff;}
div.page .rect {
    margin:0 5px;
    padding: 0 20px;
    background-color:#fff;/*<?php echo get_theme_mod('page_id','#5D030D'); ?>;*/
    border-bottom:;/*<?php echo get_theme_mod('page_border_id','#fff'); ?>;*/
    border-radius: 15px;
}
div.page .rect a{color: #000;}
div.page .rect a:visited{color: #444;}

.page div.archive{font-size: 16px;padding-left: 20px;color: #fff;text-shadow: 0px 6px 4px #000;}
.page div.archive{/*color: #000;*/}



.postedby {
    margin: 10px 2%;
    padding: 0 2%;
    background-color:<?php echo get_theme_mod('postedby_id','#000'); ?>;
    width:92%;
    box-shadow:inset 0px -1px 1px #777;
    display: inline-block;
}
.postedby a {margin: 10px;padding:0;float: left;}
.postedby ul {margin: 0;padding:0;}



.rect .push_button a ,.push_button a:link,.push_button a:visited {color: #000;}
.rect .push_button{ border-top: solid 5px #000;}
.rect .push_button a:hover {color:#444;}



.rect .push_button a ,.push_button a:link,.push_button a:visited {
    text-decoration: none;
}
/*.rect .push_button{ border-top: solid 5px #fff;}*/
/*.rect .push_button a:hover {color:#ccc;}*/





/* sidebar.css sidebar_part_qwe*/

.sidebar ul , .sidebar li {list-style: none;}

div.sidebar aside {
    margin:0 5px;
    padding: 10px 10px;
    background-color:#fff;/*<?php echo get_theme_mod('sidebar_id','#5D030D'); ?>;*/
    box-shadow: 0px 4px 8px #000;
    color: #000;
    box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;
    border:1px solid #fff;
    border-radius: 30px 0 30px 0;
}


/*.sidebar li.widget {border-bottom:5px solid #fff;}*/
.sidebar li.widget {border-bottom:5px solid #000;}

.sidebar li h2.widgettitle {color: #000;}
.sidebar select {color: #000;}
.sidebar input {color: #000;}
/* new 20151205 */

#searchsubmit {color: #222;}
#s {color: #222;}
/* end new 20151205 */

/****************************************************
 *  Push Button
 *****************************************************/
div.sidebar .push_button{
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
    


/* footer.css fopoter_part_qwe*/

footer ul , footer li {list-style: none;}


section.footer1 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:#fff;/*<?php echo get_theme_mod('footer1_id','#5D030D'); ?>;*/
    width:96%;
    float: left;
    color: #000;
    box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #000;
    border:1px solid #fff;
    /*box-shadow: 0px 4px 8px #000;*/
}

section.footer1 li.widget {float: left;padding: 30px;}


section.footer2 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:#fff;/*<?php echo get_theme_mod('footer2_id','#5D030D'); ?>;*/
    width:96%;
    float: left;
    color: #000;
    box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #000;
    border:1px solid #fff;
    /*box-shadow: 0px 4px 8px #000;*/
}

section.footer2 li.widget {float: left;padding:30px;}
section.footer2 li.widget:first-child { clear: left;}
section.footer2 li.widget:last-child { clear: right;}

section.footer3 {
    margin:5px 2%;
    padding: 0px 0px;
    background-color:#fff;/*<?php echo get_theme_mod('footer3_id','#5D030D'); ?>;*/
    width:96%;
    float: left;
    color: #000;
    box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #000;
    border:1px solid #fff;
    /*box-shadow: 0px 4px 8px #000;*/
}
section.footer3 li.widget {float: left;padding: 30px;}
section.footer3 li.widget:first-child {clear:left;}


.fl-ri{float: right;}
footer .blur img {width: 100%;height: 100px;display: none; }


footer .copyright p {color: #fff;}




/* 404 404_part_qwe*/

.oops h1 {
    /*color:#D94E3B;*/
    padding: 10px 20px;margin:10px 10px;
    /*box-shadow:2px 2px 4px #111;*/
    /*text-shadow:2px 2px 4px #111;*/
}


.oops h1 {color:#000;box-shadow:2px 2px 4px #111;text-shadow:2px 2px 4px #111;}




/* sitemap.css sitemap_part_qwe*/

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
#gmap{position: relative;z-index: 1;}
.map {z-index: 2;}
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
.description {}    
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



/* media.css media_part_qwe */

/* media_part_lte_768__qwe */

@media (max-width: 768px){

.gallerythumContainer {
/*        margin:0px 1%;
    padding: 1% 1%;
    border-radius: 0px 0px 0px 0px;
    float: left;
    
      -moz-box-shadow: 0 0 0 #000000;
   -webkit-box-shadow: 0 0 0 #000000;
   box-shadow:0 0 0 #000000 ;
    border: 0px solid #666;
*/}

    .thumbwrapper {
/*    margin:0px 1%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    float: left;
*/    width:45%;
/*      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;

    border: 1px solid #fff;
*/    }

}


/* media_part_lte_500__qwe */

@media (max-width: 500px){
    .thumbwrapper {
    margin:10px 1%;
    padding: 1% 1%;
    border-radius: 20px 20px 50px 50px;
    width:92%;
      -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow: inset 0 0 5px #000000 , 0 9px 5px #000000;
    border: 1px solid #666;
     }

}

/* media_part_lte_992__qwe */

@media (max-width: 992px){
.galleryPreviewarrow a {width: 60px;height: 60px;line-height: 60px;top:110px;}
.gallerydescription > div{top:55%;}
.gallerydescription > div a{font-size:80%;line-height: 10px;}
.gallerydescription > div input{font-size:80%;}

}

/* media_part_lte_768__qwe */


@media (max-width: 750px){
.galleryPreviewarrow a {width: 50px;height: 50px;line-height: 50px;top:95px;}
.gallerydescription > div{top:53%;}
.gallerydescription > div a{font-size:80%;}
.gallerydescription > div a{line-height: 20px;}
.gallerydescription > div input{font-size:70%;}
section.site-title p a {font-size: 100%; }
section.site-title a {font-size: 100%;padding: 0 10px;}
}


@media (max-width: 620px){
.galleryPreviewarrow a {width: 50px;height: 50px;line-height: 50px;top:95px;}
.gallerydescription > div{top:45%;}
.gallerydescription > div a{font-size:80%;}
.gallerydescription > div a{line-height: 20px;}
.gallerydescription > div input{font-size:70%;}
section.site-title p a {font-size: 100%; }
section.site-title a {font-size: 100%;padding: 0 10px;}
}

@media (max-width: 500px){
section.site-title p a {font-size: 80%;}
section.site-title a {font-size: 80%;padding: 0 10px;}
.galleryPreviewarrow a {top:40px;font-size: 80%;width: 40px;height: 40px;line-height: 40px;}
.galleryPreviewarrow a:hover {top:60px;}
.gallerydescription > div{top:40%;}
.gallerydescription > div a{font-size:70%;}
.gallerydescription > div a{line-height: 4px;}
.gallerydescription > div input{font-size:60%;}
.galleryNavigationBullets a{width: 15px;height: 15px;}

.nav {}
.cut {display: none;}   

}

@media (max-width: 340px){
section.site-title p a {font-size: 70%;}
section.site-title a {font-size: 70%;padding: 0 10px;text-shadow:0 0 0;}
.galleryNavigationBullets a{width: 10px;height: 10px;text-shadow:0 0 0;}

.gallerydescription > div {
    /*display: none;*/
    margin: 0;
    padding:0 5% 0 5%;
    background-color:rgba(0, 0, 0, 0.4);
    position: absolute;
    border-radius: 0px 0px 30px 30px;
    top:40%;
    left:5%;
    width:80%;

}

.gallerydescription > div a  {
    display: block;
    font-size:70%;
}


}


/* media_part_lte_1200__qwe */


@media (max-width: 1200px){

}


/* media_part_lte_500__qwe */


@media (max-width: 747px){
.page h1 {margin-top:60px;}

/* navbar.css*/
.nav div {
    margin: 0px auto ;
    padding: 0px;
    width: 30%; 
position: absolute;

    }

.nav div > ul {
    padding: 0;
    /*background-color:<?php echo get_theme_mod('nav_ul_id','#444'); ?>;*/
    /*border-radius:3px 3px 30px 30px;*/
    width: 100%;
}
.nav div > ul:hover li{display: block;margin-top: 0;}


.nav div > ul > li:first-child{
display: inline-block;
}

.nav div a {
    padding: 0px 15px; 
    /*background-color:<?php echo get_theme_mod('nav_a_id','#444'); ?>;;*/
}
.nav div > ul > li {
    margin: 0;
    padding: 0px 0px;
    /*background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
    height:50px;
    width: 100%;
    float: left;

    display: none;

    /*border-radius:3px 3px 30px 5px;*/
    /*border:solid 1px #ccc;*/
    /*box-shadow: 0px 6px 0px #444,0px 20px 15px #111;*/
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/

}

.nav div > ul > li >a {
    padding: 0px 15px;
    background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;
}
.nav div > ul > li:nth-child(n+4)  {
    margin: 0;
    padding: 0px 5px;
    /*background-color:<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
    /*border-radius:3px 3px 5px 30px;*/
    /*border:solid 1px #ccc;*/
    /*box-shadow: 0px 6px 0px #444,0px 20px 15px #111;*/
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/

}
.nav div > ul > li:nth-child(n+4) >a {
    padding: 0px 15px;
    /*background-color:#fff;<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
}

.nav div > ul > li >li {
    margin:0px 0;
    padding: 0px 0px;
    /*text-shadow: 0px 7px 0 #333, 0px 6px 0 #333, 0 5px 0 #333,0 4px 0 #333, 0 3px 0 #333, 0 2px 0 #333, 0 1px 0 #333;*/

}

.nav div ul > li > ul {
    margin:0px 0 ;
    padding: 0px 0px;
    /*background-color:#444;<?php echo get_theme_mod('nav_ul_li_id','#444'); ?>;*/
    position: absolute;
    left:-9999px;
    border-radius:5px;
    /*border:solid 1px #ccc;*/
    /*box-shadow: 0px 6px 0px #444,0px 20px 15px #111;*/
}
.nav div > ul > li:hover > ul {left:30%;}
.nav div > ul > li > ul > li > ul {position:absolute;left:-9999px;}

.nav div > ul > li > ul > li:hover {}
.nav div > ul > li > ul > li:hover > a {padding: 0px 200px 10px 20px; }
.nav div > ul > li > ul > li:hover > ul {left:130px;top:auto;margin-top:-65px; }
.nav div > ul > li > ul > li > ul > li {}

}

/* custome_part_qwe */

.box_shadow_qwe{box-shadow:1px 1px 12px #000;}
.box_shadow_qwe a:hover{box-shadow:0px 0px 0px #000,0px 0px 0px #000;}

    </style>
