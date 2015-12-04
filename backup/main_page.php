							<?php
							if(have_posts()) : 
								while ( have_posts() ) : the_post();
							
							echo '<div class="rect">';
							echo '<h1><a>';
							the_title();
							echo '</a></h1>';
							echo '<br/>';
							echo '<br/>';
							the_content('<br/><p class="push_button">Read more </p>');
							echo "</div>";
							endwhile;
							else :
								echo "No Content Found , or there is nothing Page By you yet";
							endif;				            
							?>	
							