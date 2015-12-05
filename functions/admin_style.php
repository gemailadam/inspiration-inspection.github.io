<?php 
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
 ?>