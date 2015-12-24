<?php 

function qwe_slideshow($wp_customize)
{

    $wp_customize->add_section('slideshow',array(
        'title' =>'Slide Show' ,
        'description' => 'Upload your slideshow images , with 400 pixel exact height',
        'priority' => '1' ));

//number of images to upload


// $wp_customize->add_setting('num_of_images_id',array('default' => 'gray'));
 
// $wp_customize->add_control(
//     'num_of_images_id',
//     array(
//         'description' =>'Choose Custome theme Colors made by me if you like',        
//         'settings' => 'num_of_images_id', 
//         'type' => 'select',
//         'label' => 'Theme colors',
//         'priority'=>1,
//         'section' => 'slideshow',
//         'transport' => 'postMessage',
//         'choices' => array(
//             'gray' => 'gray',
//             'blue' => 'BLUE',
//             'red' => 'RED',
//             'green'=>'GREEN',
//             'yellow'=>'YELLOW',
//             'white'=>'white',
//             'black'=>'BLACK'
//         ),
//     )
// );

//slideshow images
    // for ($v=1; $v < $qwe_num_of_images ; $v++) { 
	
	    $wp_customize->add_setting('image1_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image1.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image1_id',array(
	        'label' =>'Upload Image 1',
	        'priority'=>1,
	        'section' => 'slideshow' ,
	        'settings' => 'image1_id' )));

	    $wp_customize->add_setting('description1_id',array('default' => '' ));

		$wp_customize->add_control('desc1_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description1_id', 
		        'type' => 'textarea',
		        'label' => 'Description 1',
		        'priority'=>2,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);
		                
	    $wp_customize->add_setting('image2_id', array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image2.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image2_id',array(
	        'label' =>'Upload Image 2',
	        'priority'=>3,
	        'section' => 'slideshow' ,
	        'settings' => 'image2_id',)));

	    $wp_customize->add_setting('description2_id',array('default' => '' ));

		$wp_customize->add_control('desc2_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description2_id', 
		        'type' => 'textarea',
		        'label' => 'Description 2',
		        'priority'=>4,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);
		                
	    $wp_customize->add_setting('image3_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image3.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image3_id',array(
	        'label' =>'Upload Image 3',
	        'priority'=>5,
	        'section' => 'slideshow' ,
	        'settings' => 'image3_id' )));

	    $wp_customize->add_setting('image4_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image4.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image4_id',array(
	        'label' =>'Upload Image 4',
	        'priority'=>7,
	        'section' => 'slideshow' ,
	        'settings' => 'image4_id' )));

	    $wp_customize->add_setting('image5_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image5.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image5_id',array(
	        'label' =>'Upload Image 5',
	        'priority'=>9,
	        'section' => 'slideshow' ,
	        'settings' => 'image5_id' )));

	    $wp_customize->add_setting('image6_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image6.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image6_id',array(
	        'label' =>'Upload Image 6',
	        'section' => 'slideshow' ,
	        'settings' => 'image6_id' )));

	    $wp_customize->add_setting('image7_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image7.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image7_id',array(
	        'label' =>'Upload Image 7',
	        'section' => 'slideshow' ,
	        'settings' => 'image7_id' )));

	    $wp_customize->add_setting('image8_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image8_id',array(
	        'label' =>'Upload Image 8',
	        'section' => 'slideshow' ,
	        'settings' => 'image8_id' )));

    // }


}
add_action('customize_register','qwe_slideshow' );
 ?>