// <?php 

// //select using radio
// function add_customizer($wp_customize){
// $wp_customize->add_section('example_section_one', array('title' => 'example_section_one' )); 
// $wp_customize->add_setting(
//     'logo_placement',
//     array(
//         'default' => 'gray',
//     )
// );
 
// $wp_customize->add_control(
//     'logo_placement',
//     array(
//         'type' => 'radio',
//         'label' => 'Logo placement',
//         'section' => 'example_section_one',
//         'transport' => 'postMessage',
//         'choices' => array(
//             'GRAY' => 'gray',
//             'blue' => 'BLUE',
//             'red' => 'RED',
//             'green'=>'GREEN',
//             'yellow'=>'YELLOW',
//             'white'=>'WHITE',
//             'black'=>'BLACK'
//         ),
//     )
// );



// }


// add_filter('customize_register','add_customizer' );

// function add_css (){
//   $example_position = get_theme_mod( 'logo_placement','#666' );
//     if( $example_position != '' ) {
//         switch ( $example_position ) {
//             case 'gray':
//                 // Do nothing. The theme already aligns the logo to the left
//                 break;
//             case 'red':
//                 echo '<style type="text/css">';
//                 echo '.row{ background-color: red; }';
//                 echo '</style>';
//                 break;
//             case 'green':
//                 echo '<style type="text/css">';
//                 echo 'body{ background-color: #277552; }';
//                 echo '.row {background-color: #0F1B16;}';
//                 echo '.nav div > ul {background-color: #204836;}';
//                 echo '.nav div a {background-color: #204836;}';
//                 echo '.nav div > ul > li:nth-child(n+4){background-color: #204836;}';
//                 echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#204836;}';
//                 echo '.page .rect {background-color: #0F1B16;}';
//                 echo '.sidebar aside {background-color:#0F1B16;}';       
//                 echo '.footer1 {background-color:#0F1B16;}';       
//                 echo '.footer2 {background-color:#0F1B16;}';       
//                 echo '.footer3 {background-color:#0F1B16;}';       
//                 echo '</style>';
//                 break;
//             case 'black':
//                 echo '<style type="text/css">';
//                 echo 'body{ background-color: #000; }';
//                 echo '.row {background-color: #111;}';
//                 echo '.nav div > ul {background-color: #999;}';
//                 echo '.nav div a {background-color: #999;}';
//                 echo '.nav div > ul > li:nth-child(n+4){background-color: #999;}';
//                 echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#999;}';       
//                 echo '.page .rect {background-color: #000;}';       
//                 echo '.sidebar aside {background-color: #000;}';       
//                 echo '.footer1 {background-color: #000;}';       
//                 echo '.footer2 {background-color: #000;}';       
//                 echo '.footer3 {background-color: #000;}';
//                 echo '</style>';
//                 break;
//             case 'white':
//                 echo '<style type="text/css">';
//                 echo 'body{ background-color: #fff; }';
//                 echo '.row {background-color: #fff;}';
//                 echo '.nav div > ul {background-color: #000;}';
//                 echo '.nav div a {background-color: #000;}';
//                 echo '.nav div > ul > li:nth-child(n+4){background-color: #000;}';
//                 echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#000;}';       
//                 echo '.page .rect {background-color: #fff;}';
//                 echo '.sidebar aside {background-color: #fff;}';       
//                 echo '.footer1 {background-color: #fff;}';       
//                 echo '.footer2 {background-color: #fff;}';       
//                 echo '.footer3 {background-color: #fff;}';
//                 echo '</style>';
//                 break;
//             case 'orange':
//                 echo '<style type="text/css">';
//                 echo 'body{ background-color: #FBD858; }';
//                 echo '.row {background-color: #FEF8D8;}';
//                 echo '.nav div > ul {background-color: #D9C588;}';
//                 echo '.nav div a {background-color: #D9C588;}';
//                 echo '.nav div > ul > li:nth-child(n+4){background-color: #D9C588;}';
//                 echo '.nav div > ul > li:nth-child(n+4) >a {background-color:#D9C588;}';       
//                 echo '</style>';
//                 break;
//             default  :  
//                 echo '<style type="text/css">';
//                 echo 'body{ background-color:#222; }';
//                 echo '</style>';
//                 break;
//                           case 'yellow':
//           ?>
//           <script type="text/javascript">
//                         $('body').css('background-color', '#999' );
              
//           </script>
//           <?php  
//         break;  
//         }
//     }

// }

// add_filter('wp_head','add_css' );
// //add_filter('wp_footer','add_css' );

//  ?>