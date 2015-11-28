	<?php
					if(have_posts()) {
					while ( have_posts() ) { 

					the_post();
					echo '<div class="rect">';
					echo '<h1><a href="';
					the_permalink();	
					echo'">  ';
					the_title();
					echo '</a></h1>';
					echo '<br/>';
					
					echo '<br/>';
					
					the_content('<br/><p class="push_button">Read more </p>');
					echo '</div>';
					echo '<div class="postedby">';
					echo '<a href="';
					the_author_link();
					echo '">';
					the_author();
					echo "</a>";
					echo '<a href="';
					the_permalink();	
					echo '">';
					the_date('F Y');
					echo '</a>';
					
					the_category();
					
					echo '<br/>';
					echo '</div>';

					}
					}else { echo "No Content Found , or there is nothing posted By you yet";}					            
	?>	