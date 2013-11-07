<?php get_header(); ?><!-- -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Index
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->




<article>
	<div class="container">
		<div class="header">
		</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h3><?php the_title(); ?></h3>
			<em>Posted</em> <?php the_date(); ?>
			<em>in</em> <?php the_category() ?>
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<!--entry--></div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		<!--post--></div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>
		


	<?php get_sidebar(); ?>

</article>
</div>

<?php get_footer(); ?>