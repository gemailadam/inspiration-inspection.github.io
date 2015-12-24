
<?php



//////////////////////////////////////////////////////////////////////////////////
///////////////// backend admin customize style change or add icon  /////////////////////////
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
 

//add_action('admin_head', 'my_custom_fonts');
add_action('customize_register', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
    body, td, textarea, input, select {
      font-family: "Lucida Grande";
      font-size: 12px;
      
    }
    #wpcontent a {color:green;} 
    #wp-admin-bar-root-default a {}
    #adminmenuwrap a {color:orange;}
    #customize-theme-controls li h3.accordion-section-title {color:orange;}
    #customize-controls li h3 {color:orange;}

  </style>';
}

//post pages 
function five_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 5 );
    }
}
add_action( 'pre_get_posts', 'five_posts_on_homepage' );



// important some custom add like radio checkbox and others
 
function themename_customize_register($wp_customize){
    
    $wp_customize->add_section('themename_color_scheme', array(
        'title'    => __('Color Scheme', 'themename'),
        'priority' => 120,
    ));
    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[text_test]', array(
        'default'        => 'q !',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'themename_theme_options[text_test]',
    ));
    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('themename_color_scheme', array(
        'label'      => __('Color Scheme', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('display_header_text', array(
        'settings' => 'themename_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'themename_color_scheme',
        'type'     => 'checkbox',
    ));
    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'themename_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'themename_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[image_upload_test]',
    )));
    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[upload_test]', array(
        'default'           => 'abcdefg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[upload_test]',
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[link_color]', array(
        'default'           => '000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[link_color]',
    )));
    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('themename_page_test', array(
        'label'      => __('Page Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'themename_theme_options[page_test]',
    ));
}
add_action('customize_register', 'themename_customize_register');












 ?>