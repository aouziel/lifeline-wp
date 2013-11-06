<?php 
/**
* Template Name: About
*/
get_header(); ?>
<div class="container" >
<ul class="sub">
<?php
  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>
 </ul>
</div>




<?php $thisPage="About ILF"; ?>







<!-- 
**************************** 
            #HERO
**************************** 
-->
<div id="about_hero">
	<div class="container">
		<div class="about_inner span7">
			<p class="title">About us</p>
			<h1>Our Vistion is Simple</h1>
			<h5> A world in which no one is forced to drink contaminated water or expose themselves, their family, and their environment to the harms associated with cooking on an open fire...</h5>
			<h4><a href="">Read More</a></h4>
		</div>
	</div>
</div>

<!-- 
**************************** 
 #MAIN (#sidebar, #content)
**************************** 
-->
<div id="main_about">
	<div class="container">
		<div class="span7">
			<p>International Lifeline Fund ("Lifeline") is a U.S.-based 501(c)(3) non-profit organization whose mission is to reduce human suffering through interventions that generate the greatest possible impact at the lowest possible cost.  </p><br>
			<p>Currently, these interventions currently include Clean Water and Sanitation (WASH) initiatives and Fuel-Efficient Stove (FES) programs, integrated with micro-enterprise. </p><br>
			<p>Lifeline emphasizes simplicity; our programs utilize basic cost-effective, innovative technology and smart interventions that promote self-sufficiency and provide sustainable solutions.</p><br>
			<button>Support our initiatives</button>
		</div>
		<div class="triangle_btn">
			<div class="triangle span3">
				<h3> Our History</h3>
				<button> Learn more</button>
			</div>
			<div class="arrow-right span1">
			</div>
		</div>
</div>	
		
	</div> <!-- .container -->



<?php get_footer(); ?>