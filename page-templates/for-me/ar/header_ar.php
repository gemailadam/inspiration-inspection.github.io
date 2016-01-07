<section class="site-title-ar" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<span class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></span>'; ?>

</section>
<br/>

<section class="banner-ar" >

			<?php 
			    //total number of images you will add to slideshow
				$imageTotal=8;
				$description[1]='First article about 3DaVinci Portfolio theme designed for WordPress , its compleatly free with GPL v2 licences for more information click the button';
				$description[2]='some description text 2 ';
				$description[3]='some description text 3 ';
				$description[4]='some description text 4 ';
				$description[5]='some description text 5 ';
				$description[6]='some description text 6 ';
				$description[7]='some description text 7 ';
				$description[8]='some description text 8 ';

				$imagelink[1]='';
				$imagelink[2]='';
				$imagelink[3]='';
				$imagelink[4]='';
				$imagelink[5]='';
				$imagelink[6]='';
				$imagelink[7]='';
				$imagelink[8]='';

				// $num_of_images= echo get_theme_mod('num_of_images_id','8' );
				// for ($w=1; $w < $num_of_images ; $w++) { 

				// 	$name[$w]='imagelocation'.$w.'_id';

				// 	if($w<=8){
				// 	$imagelink[$w]=echo get_theme_mod( $name[$w], $default[$w]);
				// 	}
				// 	elseif ($w>8 && $<=16 ) {
				// 	$imagelink[$w]=echo get_theme_mod( $name[$w], $default[$w-8]);
				// 	}
				// 	elseif ($w>16 && $<=24) {
				// 	$imagelink[$w]=echo get_theme_mod( $name[$w], $default[$w-16]);
				// 	}
				// 	else{

				// 	}			
				//}
			 
			 ?>
			 <div class="gallerycontainer">
			 
			 	<!--h1>Gallery Title</h1-->
			 
			 	<!--div class="galleryThumbnilContainer">
			 		<div class="galleryThumbnil">
			 			<?php 
			 				for ($t=1; $t<=$imageTotal; $t++) { 
			 					echo '<a href="javascript: changeimage('.$t.')" class="thumbnilsimage'.$t.'"><img src="';
			 					?><?php
			 					bloginfo('template_directory');?><?php echo "/images/thumb/image";echo "$t.jpg";echo " width='auto' height='100' alt=''/></a>";
			 				}
			 			 ?>
			 		</div>
			 	</div-->
			 
			 	<div class="galleryPreviewContainer">
			 		<div class="galleryPreviewImage">
			 			<?php 
			 			 //for ($i=1; $i <= $imageTotal ; $i++) { 
			 				// 	echo '<img class="previewImage'.$i.'" src="';
			 				// 	bloginfo('template_directory');
			 				// 	echo '/images/image'.$i.'.jpg"';
			 				// 	echo 'height="auto" alt=""/>';
			 				//echo '<img class="previewImage'.$i.'" src="'.$imagelink[$i].';

			 			 //}

			 			echo '<img class="previewImage1" src="';echo get_theme_mod('image1_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image1.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage2" src="';echo get_theme_mod('image2_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image2.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage3" src="';echo get_theme_mod('image3_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image3.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage4" src="';echo get_theme_mod('image4_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image4.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage5" src="';echo get_theme_mod('image5_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image5.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage6" src="';echo get_theme_mod('image6_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image6.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage7" src="';echo get_theme_mod('image7_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image7.jpg');echo '" alt=""/>';
			 			echo '<img class="previewImage8" src="';echo get_theme_mod('image8_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image8.jpg');echo '" alt=""/>';

			 			 ?>
			 		</div>

			 		<div class="logo">
			 			<!-- <img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""> -->
						<?php echo '<img id="logo" src="';echo get_theme_mod('logo_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/logo.png');echo '" alt=""/>';
						?>
			 		</div>

			 		<div class="galleryPreviewarrow">
			 			<a class="previousslidearrow row-static-1" href="#" >&lt;</a>
			 			<a href="#" class="nextslidearrow row-static-1">&gt;</a>
			 		</div>
			 	</div>
				<div class="gallerydescription-ar">
					<?php 
						// for ($x=1; $x <=$imageTotal ; $x++) { 
							//echo '<div class="description'.$x.'"><a>'.$description[$x].'</a><br/><input type="submit" name="button'.$x.'" value="';
echo '<div class="description1"><div class="desbg"><a href="';echo get_theme_mod('text_description_link1_id','');echo '">';echo get_theme_mod('description1_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link1_id','');echo '"><input type="submit" onClick="" name="button1" value="';echo get_theme_mod( 'button1_id','link1' );echo '"/></a></div>';
echo '<div class="description2"><div class="desbg"><a href="';echo get_theme_mod('text_description_link2_id','');echo '">';echo get_theme_mod('description2_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link2_id','');echo '"><input type="submit" onClick="" name="button2" value="';echo get_theme_mod( 'button2_id','link2' );echo '"/></a></div>';
echo '<div class="description3"><div class="desbg"><a href="';echo get_theme_mod('text_description_link3_id','');echo '">';echo get_theme_mod('description3_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link3_id','');echo '"><input type="submit" onClick="" name="button3" value="';echo get_theme_mod( 'button3_id','link3' );echo '"/></a></div>';
echo '<div class="description4"><div class="desbg"><a href="';echo get_theme_mod('text_description_link4_id','');echo '">';echo get_theme_mod('description4_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link4_id','');echo '"><input type="submit" onClick="" name="button4" value="';echo get_theme_mod( 'button4_id','link4' );echo '"/></a></div>';
echo '<div class="description5"><div class="desbg"><a href="';echo get_theme_mod('text_description_link5_id','');echo '">';echo get_theme_mod('description5_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link5_id','');echo '"><input type="submit" onClick="" name="button5" value="';echo get_theme_mod( 'button5_id','link5' );echo '"/></a></div>';
echo '<div class="description6"><div class="desbg"><a href="';echo get_theme_mod('text_description_link6_id','');echo '">';echo get_theme_mod('description6_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link6_id','');echo '"><input type="submit" onClick="" name="button6" value="';echo get_theme_mod( 'button6_id','link6' );echo '"/></a></div>';
echo '<div class="description7"><div class="desbg"><a href="';echo get_theme_mod('text_description_link7_id','');echo '">';echo get_theme_mod('description7_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link7_id','');echo '"><input type="submit" onClick="" name="button7" value="';echo get_theme_mod( 'button7_id','link7' );echo '"/></a></div>';
echo '<div class="description8"><div class="desbg"><a href="';echo get_theme_mod('text_description_link8_id','');echo '">';echo get_theme_mod('description8_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link');echo '</a></div><br><a href="';echo get_theme_mod('button_description_link8_id','');echo '"><input type="submit" onClick="" name="button8" value="';echo get_theme_mod( 'button8_id','link8' );echo '"/></a></div>';

						// }
					 ?>
				</div>	
<img id="shadow" src="<?php bloginfo('template_directory'); ?>/images/shadow.gif" alt="">

			 	<div class="galleryNavigationBullets">
			 		<?php 
			 			for ($b=1; $b <=$imageTotal ; $b++) { 
			 					echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
			 			}
			 		 ?>
			 	</div>
				 
			 </div>
		
			

</section>
<!--img id="btn" src="<?php bloginfo('template_directory'); ?>/images/btn.png" alt="" usemap="#planetmap"-->
 
<map name="planetmap">
  <area class="circlarrow" shape="poly" coords="0,0,0,150,75,75" href="#" alt="Sun" onmouseover="this.style.Color='#FF7f00';" onmouseout="this.blur();">
  <area class="circrarrow" shape="poly" coords="150,150,150,0,75,75" href="#" alt="Mercury" onmouseover="this.focus();this.style.backgroundColor='#00FF00';" onmouseout="this.blur();">
  <area class="circtarrow" shape="poly" coords="150,0,150,150,75,75" href="venus.htm" alt="Venus">
  <area class="circbarrow" shape="poly" coords="0,0,0,1500,75,75" href="venus.htm" alt="Venus">
</map> 
<br/>
<section class="nav-ar" >
	<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
</section>
<br/>
<br/>

