<?php 

//select using radio
function add_customizer($wp_customize){
$wp_customize->add_section('example_section_one', array('title' => 'example_section_one' )); 
$wp_customize->add_setting(
    'logo_placement',
    array(
        'default' => 'gray',
    )
);
 
$wp_customize->add_control(
    'logo_placement',
    array(
        'type' => 'radio',
        'label' => 'Logo placement',
        'section' => 'example_section_one',
        'transport' => 'postMessage',
        'choices' => array(
            'gray' => 'gray',
            'blue' => 'BLUE',
            'red' => 'RED',
            'green'=>'GREEN',
            'yellow'=>'YELLOW',
            'white'=>'white',
            'black'=>'BLACK'
        ),
    )
);



}


add_filter('customize_register','add_customizer' );

function add_css (){
  $example_position = get_theme_mod( 'logo_placement','#666' );
    if( $example_position != '' ) {
        switch ( $example_position ) {
            case 'gray':
                // Do nothing. The theme already aligns the logo to the left

                    
                echo '<style type="text/css">';

                //roots.css
                echo 'html {color:#fff;}';
                echo 'a:link {color: #fff;}';
                echo 'a:visited {color: #aaa;}';
                echo 'a:hover {color: #999;}';
                echo 'body {background-color: #222;}';
                echo '.row {background-color: #222;}';
                
                //header
                echo '.site-title a:visited {color: #fff;}';
                echo '.circlarrow:hover {color: #ff7f00;}';

                //navebar
                echo '.nav div > ul {background-color: #444;}';
                echo '.nav div a {background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#444;}'; 
                
                echo '.nav div ul > li > ul {background-color: #444;border:solid 1px #ccc;}';

                //page
                echo '.page .rect {
                    background-color: #222;
                    border-bottom:1px solid #fff;
                }';

                echo '.page div.archive{color: #fff;text-shadow: 0px 6px 4px #000;}';

                echo '.postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}';

                echo '.rect .push_button a ,.push_button a:link,.push_button a:visited {
                    color: #fff;
                }';
                echo '.rect .push_button{ border-top: solid 5px #fff;}';
                echo '.rect .push_button a:hover {color:#ccc;}';
                /* 404 */
                echo '.oops h1 {
                    color:#D94E3B;
                    box-shadow:2px 2px 4px #111;
                    text-shadow:2px 2px 4px #111;
                }';

                //sidebar

                echo '.sidebar aside {background-color: #222;box-shadow: 0px 4px 8px #000;}';
                echo '.sidebar li.widget {border-bottom:5px solid #fff;}';
                echo '.push_button{
                    color:#FFF;
                    border:solid 1px #D94E3B;
                    background:#cb3b27;
                    -webkit-box-shadow: 0px 9px 0px #84261a;
                        -moz-box-shadow: 0px 9px 0px #84261a;
                        box-shadow: 0px 9px 0px #84261a;
                }';    

                echo '#searchsubmit {color: #222;}';
                echo '#s {color: #222;}';
                //footer

                echo '.footer1 {background-color: #222;box-shadow: 0px 4px 8px #000;}';
                echo '.footer2 {background-color: #222;box-shadow: 0px 4px 8px #000;}';
                echo '.footer3 {background-color: #222;box-shadow: 0px 4px 8px #000;}';

                echo '</style>';

                break;
            case 'red':
                echo '<style type="text/css">';
echo 'html a:link {color: #fff;}';
echo '#searchsubmit {color: #222;}';
echo '#s {color: #222;}';
echo 'html p{color: #fff;}';
echo 'div.page .rect {background-color: #5D030D;box-shadow:inset 4px 2px 6px #000,inset -4px 2px 6px #000;border:1px solid red;}';
echo 'section.site-title p a:link{color: #fff;}';
echo 'section.site-title a:link{color: #fff;}';
echo 'div.sidebar aside {background-color: #5D030D; color: #fff;box-shadow:inset 4px 2px 6px #000,inset -4px 2px 6px #000;border:1px solid red;}';
echo 'section.footer1  {background-color: #5D030D;color: #fff;box-shadow:inset 4px 2px 6px #000,inset -4px 2px 6px #000;border:1px solid red;}';
echo 'section.footer2  {background-color: #5D030D;color: #fff;box-shadow:inset 4px 2px 6px #000,inset -4px 2px 6px #000;border:1px solid red;}';
echo 'section.footer3  {background-color: #5D030D;color: #fff;box-shadow:inset 4px 2px 6px #000,inset -4px 2px 6px #000;border:1px solid red;}';
echo '.galleryNavigationBullets a:link{background: #fff;}';
                echo 'html {color:#000;}';
                echo 'a:link {color: #000;}';
                echo 'a:visited {color: #777;}';
                echo 'a:hover {color: #555;}';
                echo 'body{ background-color: #4F0101; }';
                echo '.row {background-color: #4F0101;}';
                
                //header

                echo '.circlarrow:hover {color: #ff7f00;}';

                //navebar
                echo '.nav >nav >div > ul {background-color: #5D030D;}';
                echo '.nav >nav >div a {background-color: #5D030D;}';
                echo '.nav> nav >div > ul > li:nth-child(n+4) {background-color: #5D030D;}';
                echo '.nav >nav >div > ul > li:nth-child(n+4) >a {background-color:#5D030D;}';     
                echo '.nav >nav >div >ul > li > ul {background-color: #5D030D;}';
                echo ".nav >nav> div>ul,.nav >nav> div>ul>li >a{background-color: #5D030D;;}";
                //page
                echo '.page .rect {background-color: #eee;border-bottom:1px solid #000;}';

                echo '.page div.archive{color: #000;text-shadow: 0px 6px 4px #000;}';

                echo '.postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}';

                echo '.rect .push_button a ,.push_button a:link,.push_button a:visited {color: #000;}';
                echo '.rect .push_button{ border-top: solid 5px #000;}';
                echo '.rect .push_button a:hover {color:#444;}';
                /* 404 */
                echo '.oops h1 {color:#000;box-shadow:2px 2px 4px #111;text-shadow:2px 2px 4px #111;}';

                //sidebar

                echo '.sidebar aside {background-color: #fff;box-shadow: 0px 4px 8px #000;}';
                echo '.sidebar li.widget {border-bottom:5px solid #000;}';
                echo '.push_button{color:#FFF;border:solid 1px #D94E3B;background:#cb3b27;
                    -webkit-box-shadow: 0px 9px 0px #84261a;-moz-box-shadow: 0px 9px 0px #84261a;
                        box-shadow: 0px 9px 0px #84261a;}';    
                echo '#searchsubmit {color: #222;}';
                echo '#s {color: #222;}';
                //footer
                echo '.footer1 {background-color: #eee;box-shadow: 0px 4px 8px #000;}';
                echo '.footer2 {background-color: #eee;box-shadow: 0px 4px 8px #000;}';
                echo '.footer3 {background-color: #eee;box-shadow: 0px 4px 8px #000;}';

                echo '</style>';
                break;

            case 'green':
                echo '<style type="text/css">';
                // html {
                //   color:white;
                //   -webkit-text-size-adjust: 100%;
                //       -ms-text-size-adjust: 100%;
                // }
                // a:link {color: #fff;}
                // a:visited {color: #aaa;}
                // a:hover {color: #999;}
                // echo 'body{ background-color: #000; }';
                // echo '.row {background-color: #000;}';
                
                // //header
                // .site-title a:visited {color: #fff;}
                // .circlarrow:hover {color: #ff7f00;}

                //navebar
                echo '.nav div > ul {background-color: #444;}';
                echo '.nav div a {background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#444;}'; 
                
                // .nav div ul > li > ul {background-color: #444;border:solid 1px #ccc;}

                // //page
                // .page .rect {
                //     background-color: #000;
                //     border-bottom:1px solid #fff;
                // }

                // .page div.archive{color: #fff;text-shadow: 0px 6px 4px #000;}

                // .postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}

                // .rect .push_button a ,.push_button a:link,.push_button a:visited {
                //     color: #fff;
                // }
                // .rect .push_button{ border-top: solid 5px #fff;}
                // .rect .push_button a:hover {color:#ccc;}
                // /* 404 */
                // .oops h1 {
                //     color:#D94E3B;
                //     box-shadow:2px 2px 4px #111;
                //     text-shadow:2px 2px 4px #111;
                // }

                // //sidebar
                echo '#searchsubmit {color: #222;}';
                echo '#s {color: #222;}';
                // .sidebar aside {background-color: #000;box-shadow: 0px 4px 8px #000;}
                // .sidebar li.widget {border-bottom:5px solid #fff;}
                // .push_button{
                //     color:#FFF;
                //     border:solid 1px #D94E3B;
                //     background:#cb3b27;
                //     -webkit-box-shadow: 0px 9px 0px #84261a;
                //         -moz-box-shadow: 0px 9px 0px #84261a;
                //         box-shadow: 0px 9px 0px #84261a;
                // }    

                // //footer

                // .footer1 {background-color: #000;box-shadow: 0px 4px 8px #000;}


                // .footer2 {background-color: #000;box-shadow: 0px 4px 8px #000;}

                // .footer3 {background-color: #000;box-shadow: 0px 4px 8px #000;}      
                echo '</style>';
                break;
            case 'black':
                echo '<style type="text/css">';
                echo 'html {color:white;}';
echo 'html a:link {color: #000;}';
echo '#searchsubmit {color: #222;}';
echo '#s {color: #222;}';
echo 'html p{color: #000;}';
echo 'div.page .rect {background-color: #fff;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #777;}';
echo 'section.site-title p a:link{color: #fff;}';
echo 'section.site-title a:link{color: #fff;}';
echo 'div.sidebar aside {background-color: #fff; color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #777;}';
echo 'section.footer1  {background-color: #fff;color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #777;}';
echo 'section.footer2  {background-color: #fff;color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #777;}';
echo 'section.footer3  {background-color: #fff;color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #777;}';
echo '.galleryNavigationBullets a:link{background: #fff;}';  
echo ".postedby a:link {color: white;}";              
                echo 'a:link {color: #fff;}';
                echo 'a:visited {color: #aaa;}';
                echo 'a:hover {color: #999;}';
                echo 'body{ background-color: #000; }';
                echo '.row {background-color: #000;}';
                
                //header
                echo '.site-title a:visited {color: #fff;}';
                echo '.circlarrow:hover {color: #ff7f00;}';

                //navebar
                echo '.nav div > ul {background-color: #444;}';
                echo '.nav div a {background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#444;}'; 
                
                echo '.nav div ul > li > ul {background-color: #444;border:solid 1px #ccc;}';

                //page
                echo '.page .rect {
                    background-color: #000;
                    border-bottom:1px solid #fff;
                }';

                echo '.page div.archive{color: #fff;text-shadow: 0px 6px 4px #000;}';

                echo '.postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}';

                echo '.rect .push_button a ,.push_button a:link,.push_button a:visited {
                    color: #fff;
                }';
                echo '.rect .push_button{ border-top: solid 5px #fff;}';
                echo '.rect .push_button a:hover {color:#ccc;}';
                /* 404 */
                echo '.oops h1 {
                    color:#D94E3B;
                    box-shadow:2px 2px 4px #111;
                    text-shadow:2px 2px 4px #111;
                }';

                //sidebar

                echo '.sidebar aside {background-color: #000;box-shadow: 0px 4px 8px #fff;}';
                echo '.sidebar li.widget {border-bottom:5px solid #fff;}';
                echo '.push_button{
                    color:#FFF;
                    border:solid 1px #D94E3B;
                    background:#cb3b27;
                    -webkit-box-shadow: 0px 9px 0px #84261a;
                        -moz-box-shadow: 0px 9px 0px #84261a;
                        box-shadow: 0px 9px 0px #84261a;
                }';    
                echo '#searchsubmit {color: #222;}';
                echo '#s {color: #222;}';
                //footer

                echo '.footer1 {background-color: #000;box-shadow: 0px 4px 8px #000;}';


                echo '.footer2 {background-color: #000;box-shadow: 0px 4px 8px #000;}';

                echo '.footer3 {background-color: #000;box-shadow: 0px 4px 8px #000;}';
                echo '</style>';
                break;
            case 'white':
                echo '<style type="text/css">';
echo 'html a:link {color: #fff;}';
echo '#searchsubmit {color: #222;}';
echo '#s {color: #222;}';
echo 'html p{color: #fff;}';
echo 'div.page .rect {background-color: #000;}';
echo 'section.site-title p a:link{color: #000;}';
echo 'section.site-title a:link{color: #000;text-shadow: 0 0 0;}';
echo 'div.sidebar aside {background-color: #000; color: #fff;}';
echo 'section.footer1  {background-color: #000;color: #fff;}';
echo 'section.footer2  {background-color: #000;color: #fff;}';
echo 'section.footer3  {background-color: #000;color: #fff;}';
echo '.galleryNavigationBullets a:link{background: #333;}';
                echo 'html {color:#000;}';
                echo 'a:link {color: #000;}';
                echo 'a:visited {color: #777;}';
                echo 'a:hover {color: #555;}';
                echo 'body{ background-color: #fff; }';
                echo '.row {background-color: #fff;}';
                
                //header

                echo '.circlarrow:hover {color: #ff7f00;}';

                //navebar
                echo '.nav div > ul {background-color: #444;}';
                echo '.nav div a {background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#444;}';     
                echo '.nav div ul > li > ul {background-color: #444;border:solid 1px #ccc;}';

                //page
                echo '.page .rect {background-color: #eee;border-bottom:1px solid #000;}';

                echo '.page div.archive{color: #000;text-shadow: 0px 6px 4px #000;}';

                echo '.postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}';

                echo '.rect .push_button a ,.push_button a:link,.push_button a:visited {color: #000;}';
                echo '.rect .push_button{ border-top: solid 5px #000;}';
                echo '.rect .push_button a:hover {color:#444;}';
                /* 404 */
                echo '.oops h1 {color:#000;box-shadow:2px 2px 4px #111;text-shadow:2px 2px 4px #111;}';

                //sidebar

                echo '.sidebar aside {background-color: #fff;box-shadow: 0px 4px 8px #000;}';
                echo '.sidebar li.widget {border-bottom:5px solid #000;}';
                echo '.push_button{color:#FFF;border:solid 1px #D94E3B;background:#cb3b27;
                    -webkit-box-shadow: 0px 9px 0px #84261a;-moz-box-shadow: 0px 9px 0px #84261a;
                        box-shadow: 0px 9px 0px #84261a;}';    
                echo '#searchsubmit {color: #222;}';
                echo '#s {color: #222;}';
                //footer
                echo '.footer1 {background-color: #eee;box-shadow: 0px 4px 8px #000;}';
                echo '.footer2 {background-color: #eee;box-shadow: 0px 4px 8px #000;}';
                echo '.footer3 {background-color: #eee;box-shadow: 0px 4px 8px #000;}';

                echo '</style>';
                break;
            case 'orange':
                echo '<style type="text/css">';
                echo 'body{ background-color: #FBD858; }';
                echo '.row {background-color: #FEF8D8;}';
                echo '.nav div > ul {background-color: #D9C588;}';
                echo '.nav div a {background-color: #D9C588;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #D9C588;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#D9C588;}';       

                //roots.css
                // html {
                //   color:white;
                //   -webkit-text-size-adjust: 100%;
                //       -ms-text-size-adjust: 100%;
                // }
                // a:link {color: #fff;}
                // a:visited {color: #aaa;}
                // a:hover {color: #999;}
                echo 'body{ background-color: #000; }';
                echo '.row {background-color: #000;}';
                
                // //header
                // .site-title a:visited {color: #fff;}
                // .circlarrow:hover {color: #ff7f00;}

                //navebar
                echo '.nav div > ul {background-color: #444;}';
                echo '.nav div a {background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #444;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#444;}'; 
                
                // .nav div ul > li > ul {background-color: #444;border:solid 1px #ccc;}

                // //page
                // .page .rect {
                //     background-color: #000;
                //     border-bottom:1px solid #fff;
                // }

                // .page div.archive{color: #fff;text-shadow: 0px 6px 4px #000;}

                // .postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}

                // .rect .push_button a ,.push_button a:link,.push_button a:visited {
                //     color: #fff;
                // }
                // .rect .push_button{ border-top: solid 5px #fff;}
                // .rect .push_button a:hover {color:#ccc;}
                // /* 404 */
                // .oops h1 {
                //     color:#D94E3B;
                //     box-shadow:2px 2px 4px #111;
                //     text-shadow:2px 2px 4px #111;
                // }

                // //sidebar

                // .sidebar aside {background-color: #000;box-shadow: 0px 4px 8px #000;}
                // .sidebar li.widget {border-bottom:5px solid #fff;}
                // .push_button{
                //     color:#FFF;
                //     border:solid 1px #D94E3B;
                //     background:#cb3b27;
                //     -webkit-box-shadow: 0px 9px 0px #84261a;
                //         -moz-box-shadow: 0px 9px 0px #84261a;
                //         box-shadow: 0px 9px 0px #84261a;
                // }    

                // //footer

                // .footer1 {background-color: #000;box-shadow: 0px 4px 8px #000;}


                // .footer2 {background-color: #000;box-shadow: 0px 4px 8px #000;}

                // .footer3 {background-color: #000;box-shadow: 0px 4px 8px #000;}

                echo '</style>';
                break; 
            case 'blue':
                echo '<style type="text/css">';
echo 'html a:link {color: #000;}';
echo '#searchsubmit {color: #222;}';
echo '#s {color: #222;}';
echo 'html p{color: #000;}';
echo 'div.page .rect {background-color: #015D63;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}';
echo 'section.site-title p a:link{color: #fff;}';
echo 'section.site-title a:link{color: #fff;}';
echo 'div.sidebar aside {background-color: #015D63; color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}';
echo 'section.footer1  {background-color: #015D63;color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}';
echo 'section.footer2  {background-color: #015D63;color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}';
echo 'section.footer3  {background-color: #015D63;color: #000;box-shadow:inset 4px 2px 6px #222,inset -4px 2px 6px #222;border:1px solid #0296A1;}';
echo '.galleryNavigationBullets a:link{background: #fff;}';  
echo ".postedby a:link {color: white;}";              

                //roots.css
				echo 'html {color:white;}';
				echo 'a:link {color: #fff;}';
				echo 'a:visited {color: #aaa;}';
				echo 'a:hover {color: #999;}';
                echo 'body{ background-color: #014347; }';
                echo '.row {background-color: #014347;}';
                
                 //header
                echo '.site-title a:visited {color: #fff;}';
                echo '.circlarrow:hover {color: #ff7f00;}';

                //navebar
                echo '.nav div > ul {background-color: #015D63;}';
                echo '.nav div a {background-color: #015D63;}';
                echo '.nav div > ul > li:nth-child(n+4){background-color: #015D63;}';
                echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#015D63;}'; 
                
                // .nav div ul > li > ul {background-color: #444;border:solid 1px #ccc;}

                //page
                echo '.page .rect {background-color: #015D63;border-bottom:1px solid #fff;}';

                // .page div.archive{color: #fff;text-shadow: 0px 6px 4px #000;}

                // .postedby {box-shadow:inset 0px -1px 1px #777;background-color: #000;}

                // .rect .push_button a ,.push_button a:link,.push_button a:visited {
                //     color: #fff;
                // }
                // .rect .push_button{ border-top: solid 5px #fff;}
                // .rect .push_button a:hover {color:#ccc;}
                // /* 404 */
                // .oops h1 {
                //     color:#D94E3B;
                //     box-shadow:2px 2px 4px #111;
                //     text-shadow:2px 2px 4px #111;
                // }

                //sidebar

                echo '.sidebar aside {background-color: #015D63;box-shadow: 0px 4px 8px #000;}';
                // .sidebar li.widget {border-bottom:5px solid #fff;}
                // .push_button{
                //     color:#FFF;
                //     border:solid 1px #D94E3B;
                //     background:#cb3b27;
                //     -webkit-box-shadow: 0px 9px 0px #84261a;
                //         -moz-box-shadow: 0px 9px 0px #84261a;
                //         box-shadow: 0px 9px 0px #84261a;
                // }    
                echo '#searchsubmit {color: #222;}';
                echo '#s {color: #222;}';
                // //footer

                // .footer1 {background-color: #000;box-shadow: 0px 4px 8px #000;}


                // .footer2 {background-color: #000;box-shadow: 0px 4px 8px #000;}

                // .footer3 {background-color: #000;box-shadow: 0px 4px 8px #000;}

                echo '</style>';
                break;

            case 'yellow':
          ?>
          <script type="text/javascript">
                        $('body').css('background-color', '#999' );
              
          </script>
          <?php  
        break;  
        }
    }

}

add_filter('wp_head','add_css' );
//add_filter('wp_footer','add_css' );

 ?>