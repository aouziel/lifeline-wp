<?php get_header(); ?><!-- -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Index
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	index scss is in _single 
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->








<article>
	<div class="container">
		<div id="bg_image">
			<div class="blog_inner span7">
				<p class="title">Template Page</p>
				<h1>Sublime to the Title</h1>
		</div>
		</div>
		<div class="span8">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h3><?php the_title(); ?></h3>
						<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						<div class="entry">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
							<?php the_tags( 'Tags: ', ', ', ''); ?>
						<!--entry--></div>
						<?php edit_post_link('Edit this entry','','.'); ?>
					<!--post--></div>
				<?php comments_template(); ?>
				<?php endwhile; endif; ?>
		</div>





		<?php get_sidebar(); ?>
		</div>

	</div> <!--. container -->
</article>

<?php get_footer(); ?>