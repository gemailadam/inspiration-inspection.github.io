<?php 

function qwe_slideshow($wp_customize)
{

    $wp_customize->add_section('slideshow',array(
        'title' =>'Slide Show' ,
        'description' => 'Upload your slideshow images , with 400 pixel exact height',
        'priority' => '1' ));

	
	    $wp_customize->add_setting('image1_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image1.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image1_id',array(
	        'label' =>'Upload Image 1',
	        'priority'=>1,
	        'section' => 'slideshow' ,
	        'settings' => 'image1_id' )));

	    $wp_customize->add_setting('description1_id',array('default' => 'write your description' ));

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


	    $wp_customize->add_setting('button1_id',array('default' => 'link 1' ));

		$wp_customize->add_control('btn1_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button1_id', 
		        'type' => 'text',
		        'label' => 'Button link text 1',
		        'priority'=>3,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);
				


	    $wp_customize->add_setting('image2_id', array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image2.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image2_id',array(
	        'label' =>'Upload Image 2',
	        'priority'=>4,
	        'section' => 'slideshow' ,
	        'settings' => 'image2_id',)));

	    $wp_customize->add_setting('description2_id',array('default' => 'write your description' ));

		$wp_customize->add_control('desc2_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description2_id', 
		        'type' => 'textarea',
		        'label' => 'Description 2',
		        'priority'=>5,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button2_id',array('default' => 'link 2' ));

		$wp_customize->add_control('btn2_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button2_id', 
		        'type' => 'text',
		        'label' => 'Button link text 2',
		        'priority'=>6,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);
				
		                
	    $wp_customize->add_setting('image3_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image3.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image3_id',array(
	        'label' =>'Upload Image 3',
	        'priority'=>7,
	        'section' => 'slideshow' ,
	        'settings' => 'image3_id' )));

	    $wp_customize->add_setting('description3_id',array('default' => 'write your description' ));

		$wp_customize->add_control('desc3_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description3_id', 
		        'type' => 'textarea',
		        'label' => 'Description 3',
		        'priority'=>8,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button3_id',array('default' => 'link 3' ));

		$wp_customize->add_control('btn3_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button3_id', 
		        'type' => 'text',
		        'label' => 'Button link text 3',
		        'priority'=>9,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);






	    $wp_customize->add_setting('image4_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image4.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image4_id',array(
	        'label' =>'Upload Image 4',
	        'priority'=>10,
	        'section' => 'slideshow' ,
	        'settings' => 'image4_id' )));

	    $wp_customize->add_setting('description4_id',array('default' => 'write your description' ));

		$wp_customize->add_control('desc4_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description4_id', 
		        'type' => 'textarea',
		        'label' => 'Description',
		        'priority'=>11,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button4_id',array('default' => 'link 4' ));

		$wp_customize->add_control('btn4_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button4_id', 
		        'type' => 'text',
		        'label' => 'Button link text 4',
		        'priority'=>12,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);





	    $wp_customize->add_setting('image5_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image5.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image5_id',array(
	        'label' =>'Upload Image 5',
	        'priority'=>13,
	        'section' => 'slideshow' ,
	        'settings' => 'image5_id' )));



		$wp_customize->add_control('desc5_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description5_id', 
		        'type' => 'textarea',
		        'label' => 'Description',
		        'priority'=>14,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button5_id',array('default' => 'link 5' ));

		$wp_customize->add_control('btn5_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button5_id', 
		        'type' => 'text',
		        'label' => 'Button link text 5',
		        'priority'=>15,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);







	    $wp_customize->add_setting('image6_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image6.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image6_id',array(
	        'label' =>'Upload Image 6',
	        'priority'=>16,
	        'section' => 'slideshow' ,
	        'settings' => 'image6_id' )));


		$wp_customize->add_control('desc6_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description6_id', 
		        'type' => 'textarea',
		        'label' => 'Description',
		        'priority'=>17,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button6_id',array('default' => 'link 6' ));

		$wp_customize->add_control('btn6_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button6_id', 
		        'type' => 'text',
		        'label' => 'Button link text 6',
		        'priority'=>18,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);







	    $wp_customize->add_setting('image7_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image7.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image7_id',array(
	        'label' =>'Upload Image 7',
   	        'priority'=>19,
	        'section' => 'slideshow' ,
	        'settings' => 'image7_id' )));


		$wp_customize->add_control('desc7_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description7_id', 
		        'type' => 'textarea',
		        'label' => 'Description',
		        'priority'=>20,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button7_id',array('default' => 'link 7' ));

		$wp_customize->add_control('btn7_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button7_id', 
		        'type' => 'text',
		        'label' => 'Button link text 7',
		        'priority'=>21,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);






	    $wp_customize->add_setting('image8_id',array('default' => 'https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg' ));
	    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image8_id',array(
	        'label' =>'Upload Image 8',	        
	        'priority'=>22,
	        'section' => 'slideshow' ,
	        'settings' => 'image8_id' )));

    

		$wp_customize->add_control('desc8_id',array(
		        'description' =>'add description to your image',        
		        'settings' => 'description8_id', 
		        'type' => 'textarea',
		        'label' => 'Description',
		        'priority'=>23,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);

	    $wp_customize->add_setting('button8_id',array('default' => 'link 8' ));

		$wp_customize->add_control('btn8_id',array(
		        'description' =>'add link text to your button',        
		        'settings' => 'button8_id', 
		        'type' => 'text',
		        'label' => 'Button link text 8',
		        'priority'=>24,
		        'section' => 'slideshow',
		        'transport' => 'postMessage',
		        
		        
		    )
		);




}
add_action('customize_register','qwe_slideshow' );
 ?>