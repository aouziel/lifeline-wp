<?php get_header(); ?><!-- -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Single post
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<article>
	<div class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><?php the_title(); ?></h3>
				<em>Posted</em> <?php the_date(); ?>
				<em>in</em> <?php the_category() ?>  <br>
				<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				<div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					<?php the_tags( 'Tags: ', ', ', ''); ?>
				<!--entry--></div>
				<?php// edit_post_link('Edit this entry','','.'); ?>
			<!--post--></div>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
	</div>
</article>

<?php get_footer(); ?>


