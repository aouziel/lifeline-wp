<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>International Lifeline Fund</title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
	<script src="assets/js/stuHover.js" type="text/javascript"></script>
	

</head>
<body>



	
	<header class="default"> 
		<div class="container full">
		
			<div class="logo">
				<a href="<?php echo home_url (); ?>">  
       			 
				<img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"></a>

			</div>
			<div class="side_menu">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'sub_nav' ) ); ?>
					
				</ul>
				<form>
			    	<input type="email" name="email" placeholder="Newsletter">
			    	<button type="submit">
			    		<img src="<?php bloginfo('template_url'); ?>/assets/images/newsletter.png" alt="">
			    	</button>

			    </form>
			</div>
			<nav id="nav">

				<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>
				<li class="right"> <a href"#"> <img src="<?php bloginfo('template_url'); ?>/assets/images/header_twit.png" alt=""></a></li>
				<li class="right"> <a href"#"> <img src="<?php bloginfo('template_url'); ?>/assets/images/header_fb.png" alt=""></a></li>
			</nav>

			<!--	<ul class="select">
                        <ul class="sub about ">
                        </ul>
						<ul class="sub initiatives ">
                        </ul>
						 <ul class="sub take_action ">
                        </ul>

				</ul> -->
		</div>
	</header>