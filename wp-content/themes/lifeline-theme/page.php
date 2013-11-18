<?php get_header(); ?><!-- -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Index
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

<article>
	<div class="container">
		<div id="bg_image">
			<div class="blog_inner span7">
				<p class="title">Template Page</p>
				<h1>Sublime to the Title</h1>
			</div> <!--blog_inner-->
		</div> <!--bg_image-->
		<div class="span8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h3><?php the_title(); ?></h3>
						<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						<div class="entry">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
							<?php the_tags( 'Tags: ', ', ', ''); ?>
						</div><!--entry-->
						<?php edit_post_link('Edit this entry','','.'); ?>
					</div><!--post-->
				<?php comments_template(); ?>
				<?php endwhile; endif; ?>
		</div><!--span8-->

		<?php get_sidebar(); ?>

	</div> <!--. container -->
</article>

<?php get_footer(); ?>