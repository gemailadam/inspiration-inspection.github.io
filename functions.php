<?php 
require_once('functions/style.php');
require_once('functions/changetheme.php');
// require_once('functions/style/change-all-white.php');
// require_once('functions/style/change-all-red.php');
// require_once('functions/style/change-all-green.php');
// require_once('functions/style/change-all-blue.php');
// require_once('functions/style/change-all-black.php');
require_once('functions/layout.php');
require_once('functions/addbar.php');
require_once('functions/test.php');
require_once('functions/class_customizer_js.php');
require_once('functions/admin_style.php');
require_once('functions/woocommerce_action.php');
require_once('functions/postperpage.php');
require_once('functions/script.php');
//require_once('functions/head.php');




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

// wp_enqueue_script( 'jquery-ui-dialog' );
// // jQuery
// wp_enqueue_script('jquery');
// // This will enqueue the Media Uploader script
// wp_enqueue_media();
?>
    <!--div>
    <label for="image_url">Image</label>
    <input type="text" name="image_url" id="image_url" class="regular-text">
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">

</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_url').val(image_url);
        });
    });
});
</script-->
<?php 
function load_wp_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );
 ?>