<?php 
/**
* Template Name: Action
*/
get_header(); ?>




<?php $thisPage="action"; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){js=d.createElement(s);
	js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
	fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>				


<!-- 
**************************** 
            #HERO
**************************** 
-->
<div id="action_hero">
	<div class="container">
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
		<div id="content_action" class="">

			<div class="span4">
				<img src="/assets/images/action_1span4.png" alt="">
				<h3>Clean Water</h3>
				<h5>Give to a Clean Water Project</h5>
			</div>
			<div class="span4">
				<img src="/assets/images/action2span4.png" alt="">
				<h3>Fuel Efficiant Technology</h3>
				<h5>Give to a Clean Energy Project</h5>
			</div>			
			<div class="span4">
				<img src="/assets/images/action_3span4.png" alt="">
				<h3>Micro- <br>Enterprise</h3>
				<h5>Give to a Small Business Project</h5>
			</div>				
		</div><!-- #content-->
		<div id="sidebar-default" class="sidebar_action">
		    <p>Go the Extra Mile</P>
		    <h2 class="span8">Create a Page and fundraise for International Lifeline Fund. Learn More</h2>
		    <a href="" ><img src="assets/images/sidebar_arrow.png" alt=""></a>
	  	</div><!-- #sidebar -->

		<div id="content_action" class="social">

			<div class="span4 btn_long">
				<h3>Become a Lifeline <br> Volunteer</h3>
				<h4>No Better Time Than Now</h4>
				<button>Learn more</button>
			</div>
			<div class="span4">
				<h3>Stay Plugged In</h3>
				<form>
					<input class="name" type="text" placeholder="Name">
					<input  class="email" type="text" name="email" placeholder="Email Address">
				</form>
				<button>Join</button>
			</div>			
			<div class="span4">
				<h3>Share the <br> Lifeline Story <br>
					<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="false"></div>
					<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
				</h3>
				<h4>Give to a Small Business Project</h4>
		    	<a class="media"href="" ><img class="fb" src="assets/images/action_fb.png" alt=""></a>
		    	<a  href="" ><img src="assets/images/action_twitter.png" alt=""></a>
		   		<a  href="" ><img src="assets/images/action_vimo.png" alt=""></a>
		    	<a  href="" ><img src="assets/images/action_flickr.png" alt=""></a>
			</div>				
		</div><!-- #content-->	
	</div> <!-- .container -->
</div> <!-- #main -->



<?php get_footer(); ?>