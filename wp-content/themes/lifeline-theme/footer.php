<!doctype html>

	
	<footer class="default"> 
		<div class="container">
		
			
			
			<nav class="menu_footer">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>
					
				</ul>
			</nav>
			<div class="side_menu_footer">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'sub_nav' ) ); ?>
				</ul>
			</div>
			<button class="footer_btn" type="donate"> Donate Today</button>
			<button class="footer_btn" type="submit">Join Lifeline</button>
		</div>
	</footer>