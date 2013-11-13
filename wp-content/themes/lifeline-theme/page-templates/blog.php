<?php
 /**
* Template Name: Blog
*/


get_header(); ?>



<article>
	<div class="container">
		<div class="span8">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php// include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<!--entry--></div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		<!--post--></div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>
		</div> <!--span8 -->
	</div> <!-- container -->
	<?php get_sidebar(); ?>

</article>

<?php get_footer(); ?>
