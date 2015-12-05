<?php 
/* register widgets for sidebare*/

/////////////////////////////////////////////
///////////// sidebare 1 ////////////////////
/////////////////////////////////////////////

function my_register_right_sidebar() {
$args = array('name' =>'Sidebar 1',
	'id'=>'sidebar1' ,
	'description'=> '',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','my_register_right_sidebar');



/////////////////////////////////////////////
///////////// add Footers ////////////////////
/////////////////////////////////////////////

function my_register_footers() {
$args2 = array('name' =>__('Footer %d'),
    'id'=>'footer' ,
    'description'=> 'add another footer',
    'class'  => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' ); 

register_sidebars(3,$args2);

}

add_action('widgets_init','my_register_footers');




 ?>