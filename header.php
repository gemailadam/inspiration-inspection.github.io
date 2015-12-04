<section class="site-title" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a>'; ?>

</section>
<br/>

<section class="banner" >

			<?php 
			    //total number of images you will add to slideshow
				$imageTotal=8;
				$description[1]='some description text 1 ';
				$description[2]='some description text 2 ';
				$description[3]='some description text 3 ';
				$description[4]='some description text 4 ';
				$description[5]='some description text 5 ';
				$description[6]='some description text 6 ';
				$description[7]='some description text 7 ';
				$description[8]='some description text 8 ';
			 
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
			 				for ($i=1; $i <= $imageTotal ; $i++) { 
			 					echo '<img class="previewImage'.$i.'" src="';
			 					bloginfo('template_directory');
			 					echo '/images/image'.$i.'.jpg"';
			 					echo 'width="900" height="auto" alt=""/>';
			 				}
			 			 ?>
			 		</div>

			 		<div class="logo">
			 			<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
			 		</div>

			 		<div class="galleryPreviewarrow">
			 			<a href="#" class="previousslidearrow">&lt;</a>
			 			<a href="#" class="nextslidearrow">&gt;</a>
			 		</div>
			 	</div>

			 	<div class="galleryNavigationBullets">
			 		<?php 
			 			for ($b=1; $b <=$imageTotal ; $b++) { 
			 					echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
			 			}
			 		 ?>
			 	</div>
				 
				<div class="gallerydescription">
					<?php 
						for ($x=1; $x <=$imageTotal ; $x++) { 
							echo '<div class="ded description'.$x.'"><a>'.$description[$x].'</a><br/><input type="submit" name="button'.$x.'" value="';

							?><?php  echo get_theme_mod( 'name'.$x,'button'.$x ); ?><?php
							echo '" /></div>';
						}
					 ?>
				</div>	
			 </div>
		
			

</section>
<img id="shadow" src="<?php bloginfo('template_directory'); ?>/images/shadow.gif" alt="">
<!--img id="btn" src="<?php bloginfo('template_directory'); ?>/images/btn.png" alt="" usemap="#planetmap"-->
 
<map name="planetmap">
  <area class="circlarrow" shape="poly" coords="0,0,0,150,75,75" href="#" alt="Sun" onmouseover="this.style.Color='#FF7f00';" onmouseout="this.blur();">
  <area class="circrarrow" shape="poly" coords="150,150,150,0,75,75" href="#" alt="Mercury" onmouseover="this.focus();this.style.backgroundColor='#00FF00';" onmouseout="this.blur();">
  <area class="circtarrow" shape="poly" coords="150,0,150,150,75,75" href="venus.htm" alt="Venus">
  <area class="circbarrow" shape="poly" coords="0,0,0,1500,75,75" href="venus.htm" alt="Venus">
</map> 
<br/>
<section class="nav" >
	<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
</section>
<br/>
<br/>
