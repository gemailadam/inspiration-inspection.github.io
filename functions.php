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

 ?>
<?php 
//register my nav menus
function wwp_register_nav_menu(){

    $location='Primary';
    $description='Primary menu';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','wwp_register_nav_menu' );
 ?>


<?php 
//control css style
//how to include classes in php
/*require_once('class.twitter.php');

$t = new twitter;
$t->username = 'user';
$t->password = 'password';

$data = $t->publicTimeline();

include "class.twitter.php";

or

require "class.twitter.php";

Using require (or require_once if you want to ensure the class is only loaded once
 during execution) will cause a fatal error to be raised if the file doesn't exist,
 whereas include will only raise a warning. 
See http://php.net/require and http://php.net/include for more details


require_once('includes/null-meta-compare.php');
require_once('includes/older-examples.php');
require_once('includes/wp-admin-menu-classes.php');
require_once('includes/admin-menu-function-examples.php');
require_once('includes/cpt-filtering-in-admin.php'); // WA: Adding a Taxonomy Filter to Admin List for a Custom Post Type?http://wordpress.stackexchange.com/questions/578/
require_once('includes/category-fields.php');
require_once('includes/post-list-shortcode.php');
require_once('includes/car-type-urls.php');
require_once('includes/buffer-all.php');
require_once('includes/get-page-selector.php');
require_once('includes/top-5-posts-per-category.php'); // http://wordpress.stackexchange.com/questions/907/
require_once('includes/alternate-category-metabox.php');  // http://wordpress.stackexchange.com/questions/951/
require_once('includes/remove-status.php');  // http://lists.automattic.com/pipermail/wp-hackers/2010-August/034384.html
require_once('includes/301-redirects.php');  // http://wordpress.stackexchange.com/questions/1027/removing-the-your-backup-folder-might-be-visible-to-the-public-message-generate

require_once('src/nav.php');
*/


//////////////////////////////////////////////////////////////////////////////////
///////////////// theme customize style change function  /////////////////////////
//////////////////////////////////////////////////////////////////////////////////
require_once('src/style.php');
require_once('src/layout.php');
?>

 <?php 
/*register menus*/
/*
function register_my_menus() {
  register_nav_menus(
    array(
      'navigation_menu_primary' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'footer-menu' => __( 'My Custom Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'sub-menu',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
  
    // build html
    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
  
// add main/sub classes to li's and links
 function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
    // build html
    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
  
    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
}



*/
?>

<?php 

function change_admin_icon($args){
$args['menu_icon'] = 'dashicons-format-aside';
return $args;
}
$tag='dwwp_post_type_args';
$function_to_add='change_admin_icon';
add_filter( $tag, $function_to_add );
?>

<?php 
///////////////////////////////////////////////////////////////////////
////////// Example from wordpress.org for register_post_type //////////
///////////////////////////////////////////////////////////////////////

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
/*
add_action( 'init', 'codex_book_init' );
function codex_book_init() {
    $labels = array(
        'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'book', $args );
}
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
