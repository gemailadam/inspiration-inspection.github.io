
<?php 

				$thumbdescription[1]='some description text 1 ';
				$thumbdescription[2]='some description text 2 ';
				$thumbdescription[3]='some description text 3  some description text 3  some description text 3 some description text 3 ';
				$thumbdescription[4]='some description text 4 ';
				$thumbdescription[5]='some description text 5 ';
				$thumbdescription[6]='some description text 6 ';
				$thumbdescription[7]='some description text 7 ';
				$thumbdescription[8]='some description text 8 ';


				$imagelink[1]='';
				$imagelink[2]='';
				$imagelink[3]='';
				$imagelink[4]='';
				$imagelink[5]='';
				$imagelink[6]='';
				$imagelink[7]='';
				$imagelink[8]='';
 ?>


<section class="sectionthumb col-xs-12 col-lg-12 col-md-12 col-sm-12">
	
			 	<div class="gallerythumContainer">
			 			<?php 
			 		
		 				for ($t=2; $t <= 4; $t++) { 
		 				?>
		 				<div class="thumbwrapper">
		 				<div class="galleryThumbnil">
		 			
		 				<?php	
		 					echo '<img src="';echo get_template_directory_uri();echo '/images/image'.$t.'.jpg" alt=""/></a>'; 
		 				?>
					
						</div>
						
						<?php
						echo '<div class="des thumbdescription'.$t.'"><a><p>'.$thumbdescription[$t].'<p></a><br/><input type="submit" name="button'.$t.'" value="button';
						?>

						<?php  //echo get_theme_mod( 'name'.$t,'button'.$t ); ?>

						<?php
						echo '" /></div></div>';
		 				}
		 			
		 			    ?>
			 		
			 		
			 	</div>
			 
</section>
