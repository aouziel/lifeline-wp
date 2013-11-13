<?php 
/**
* Template Name: Home
*/
get_header(); ?>

<!-- 
**************************** 
            #HERO
**************************** 
-->
<div id="hero">
	<div class="container">
		<div class="hero-inner">
			<h1>Clean Water, Clean Cooking, for Life.</h1>
			<h2>We are a non-profit organization whos misstion is to reduce human suffering though programs and activities that generate the greatist the greatest possible impact at the lowest possible cost.</h2>
			<button>More about us</button>
			<button>Support our inititives</button>
			
		</div>
	</div>
</div>

<!-- 
**************************** 
 #MAIN (#sidebar, #content)
**************************** 
-->
<div id="main">
	<div class="container">
		<div class="span12">
			<img class="left span5"src="<?php bloginfo('template_url'); ?>/assets/images/home_left_line.png" alt="">

			<p class="span2">our current initiatives</p>
			<img class="right span5"src="<?php bloginfo('template_url'); ?>/assets/images/home_right_line.png" alt="">
		</div>
		<div id="content" class="">

			<div class="span4">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/home1span4.png" alt="">
				<h3>Clean Water</h3>
				<h4>Learn More</h4>
			</div>
			<div class="span4">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/home2span4.png" alt="">
				<h3>Fuel Efficiant Technology</h3>
				<h4>Learn More</h4>
			</div>			
			<div class="span4">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/home3span4.png" alt="">
				<h3>Micro- <br> Enterprise</h3>
				<h4>Learn More</h4>
			</div>				
		</div><!-- #content-->
		<div id="sidebar-default" class="sidebar">
		    <p>RECENTLY AT ILF</P>
		    <h2 class="span8">Is Discomfort With Cultural Difference Preventing the Development Sector From Doing Its Job? Read more</h2>
		    <a href="" ><img src="<?php bloginfo('template_url'); ?>/assets/images/sidebar_arrow.png" alt=""></a>
	  	</div><!-- #sidebar -->
			<div class="span12">
					<img class="left span5"src="<?php bloginfo('template_url'); ?>/assets/images/home_left_line.png" alt="">

					<p class="span2">future partners</p>
					<img class="right span5"src="<?php bloginfo('template_url'); ?>/assets/images/home_right_line.png" alt="">
			</div>	
			<div class="sidebar_partners span12">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/home_partners.png" alt=""> 
			</div>   	
		    
	</div> <!-- .container -->
</div> <!-- #main -->



<?php get_footer(); ?>