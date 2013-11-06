<?php 
/**
* Template Name: Initiatives
*/
get_header(); ?>
<div class="container" >
<nav id="nav">
<ul class="sub">
<?php
  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>
 </ul>
</nav>
</div>




<?php $thisPage="initiatives"; ?>

<!-- 
**************************** 
            #HERO
**************************** 
-->
<div id="initiatives_hero">
	<div class="container">
		<div class="initiatives_inner">
			<h3>Initiatives</h3>
			<h1>A Global Impact <br>Snapshot</h1>
		</div>
		<div class="span4 black_bg">
			<img src="/assets/images/home1span4.png" alt="">
			<h1>2,182</h1>
			<h2>Wells dug and maintained worldwide.</h2>
		</div>
		<div class="span4 black_bg">
			<img src="/assets/images/home2span4.png" alt="">
			<h1>4,382</h1>
			<h2>Clean stoves delivered to developing countires.</h2>
		</div>
		<div class="span4 black_bg">
			<img src="/assets/images/home3span4.png" alt="">
			<h1>874</h1>
			<h2>Microfiance loans and small businesses started</h2>
		</div>
	</div> <!--container-->
</div> <!--initiative_hero-->

<!-- 
**************************** 
 #MAIN (#sidebar, #content)
**************************** 
-->
<div id="main_init">
	<div class="container">
		<div id="" class="">

			<div class="span4 grey_bg">
				<h4>Half of the population of Sub-Saharan Africa lack access to a safe water source and is reduced to drinking from stagnant pools</h4>
				<h4>Consequently, water-borne diseases are the second leading cause of mortality in the region and account for 70% of all hospital visits. The socio-economic consequences are devastating, including reduced productivity of villagers too weak to work and the disruption of their children’s education.</h4>
				<h4>To find out how Lifeline is addressing this problem, click on one of the links below</h4>
				<button> Borehole drilling program</button>
				<button> Sanitation and hygiene program</button>
			</div>
			<div class="span4 grey_bg">
				<h4>During the past two decades, Sudan, Uganda and much of the rest of East Africa have lost one-third of their forest cover – about half of which is attributable to the use of wood for cooking. </h4>
				<h4>On an even larger scale, Africa loses approximately 9.9 million acres of forest every year – twice the global rate of deforestation.  In reality, this means that for every 28 trees that are cut down, only one tree is planted</h4>
				<h4>This rapid and wide-spread deforestation is caused, in large part, by the fact that 80% of sub-Saharan Africa’s population relies on solid biomass fuels for cooking – primarily wood and charcoal.  The human costs of this cooking method are staggering and include: </h4>
				<h4>  •  Depressed living standards: a typical female villager will spend approximately one third of her time collecting wood and cooking</h4>
				<h4>  •  Sexual violence: in insecure regions like Darfur, collection of firewood is the single greatest risk factor for rape.</h4>
				<h4>  •  Respiratory disease: indoor air pollution resulting from open fire cooking is responsible for 300,000 to 500,000 premature deaths in Sub-Saharan Africa each year.</h4>
				<h4>To find out how Lifeline is addressing these and other problems associated with open fire cooking, click on one of the links below. </h4>
				<button>fuel-efficent stove program</button>
			</div>			
			<div class="span4 grey_bg">
				<h4>TEXT STILL NEEDED Half of the population of Sub-Saharan Africa lack access to a safe water source and is reduced to drinking from stagnant pools. </h4>
				<h4>Consequently, water-borne diseases are the second leading cause of mortality in the region and account for 70% of all hospital visits. The socio-economic consequences are devastating, including reduced productivity of villagers too weak to work and the disruption of their children’s education. </h4>
				<h4>To find out how Lifeline is addressing this problem, click on one of the links below: </h4>
				<button>woodless kiln program</button>

			</div>				
		</div><!-- #content-->
	</div> <!-- .container -->
</div> <!-- #main -->



<?php get_footer(); ?>