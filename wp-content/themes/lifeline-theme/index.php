<?php get_header(); ?><!-- -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Index
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	index scss is in _blogs
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>





<article>
	<div class="container">
		<div id="bg_image">
			<div class="blog_inner span7">
				<p class="title">Template Page</p>
				<h1>Sublime to the Title</h1>
			</div><!--blog_inner -->
		</div> <!--bg_image-->

		<div class="blog">
			<div class="span8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<!--Posted <?php the_time('F jS, Y'); ?>
					in <?php the_category() ?> -->
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					<div class="entry">
						<hr class="box">
						<?php the_post_thumbnail ('catagory-thumb'); ?>
						<?php the_excerpt(); ?>
						<a class="read_more" href="<?php echo get_permalink(); ?>"> Read More</a>
						<div class="social_media">
							<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="false"></div>
							<a href="https://twitter.com/share" class="twitter-share-button" data-via=" " data-count="none">Tweet</a>
						</div><!-- social_media-->

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					</div><!--entry-->
				<? // php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div><!--post-->
				<?php endwhile; endif; ?>
			</div>
		<div class="span4">
			<?php get_sidebar(); ?>
		</div><!--span4-->
		</div> <!--blog-->
	</div> <!--. container -->
</article>

<?php get_footer(); ?>