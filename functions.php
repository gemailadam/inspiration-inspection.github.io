<?php 
require_once('src/style.php');
require_once('src/layout.php');
require_once('src/addbar.php');
require_once('src/test.php');
require_once('src/class_customizer_js.php');
require_once('src/admin_style.php');




//register my nav menus
function wwp_register_nav_menu(){

    $location='Primary';
    $description='Primary menu';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','wwp_register_nav_menu' );



//////////////////////////////////////////////////////////////////////////////////
///////////////// theme customize style change function  /////////////////////////
//////////////////////////////////////////////////////////////////////////////////



function change_admin_icon($args){
$args['menu_icon'] = 'dashicons-format-aside';
return $args;
}
$tag='dwwp_post_type_args';
$function_to_add='change_admin_icon';
add_filter( $tag, $function_to_add );

///////////////////////////////////////////////////////////////////////
////////// Example from wordpress.org for register_post_type //////////
///////////////////////////////////////////////////////////////////////

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

///////////////////////////////////////////////////////////////////////
//////////part 2 Example from wordpress.org for register_post_type //////////
///////////////////////////////////////////////////////////////////////
//register new post menu to admin

//sub2 essential args_post
$plural ='menu test plural';
$singular ='menu test singular';
//sub essential args_post
$labels = array(
    'name'          => $plural,
    'singular_name' => $singular,
    'add_name'      => 'add name test',
    'add_name_item' => 'add name item test'. $singular ,
    'edit'          => 'edit test',
    'edit_item'     => 'edit item test'. $singular,
    'new_item'      => 'new item test'. $singular,

);
//esential
$post_type='anything';
$args_post= array(
    'public'        => true,
    'labels'        =>$labels,
    'show_in_menu'  => true,
    'menu_icon'     =>'dashicons-admin-settings',
    'supports'      => array(
    'title'  , 
/*    'editor' , 
    'author' , 
    'custom-fields',
    'thumbnail' ,
    'post-thumbnails',
    'excerpt',
    'trackbacks',
    'comments' ,
    'revisions' ,
    'page-attributes',
    'post-formats' ,
*/
)
);


register_post_type( $post_type, $args_post );

$tag_post='init';
$function_to_add_post='register_post_type';
$priority_post='6';
add_action( $tag_post, $function_to_add_post, $priority_post );


function add_custom_metabox_to_anything_post_type (){
    // $id="wwp_meta";
    // $title='menu test plural metabox';
    // $callback='';
    // $screen='anything';
    // $priority='7';
    // $context='side';
    // $callback_args='high';
    // add_meta_box( $id, $title, $callback, $screen, $context, $priority, $callback_args );
    add_meta_box( 'wwp_meta','test metabox','wwp_meta_callback','anything','side','low');
    
}
add_action('add_meta_boxes','add_custom_metabox_to_anything_post_type' );

function add_custom_metabox_to_anything_post_type_2 (){
    add_meta_box( 'wwp_meta_2','2nd test metabox','wwp_meta_callback2','anything','side','low');
} 
add_action('add_meta_boxes','add_custom_metabox_to_anything_post_type_2' );


function wwp_meta_callback(){


echo '<label for=""> Name:</label> <input type="text">';

}

function wwp_meta_callback2(){

echo '<label for=""> Name:</label> <input type="text">';
echo '<label for="">Password:</label> <input type="text">';

}


?>
