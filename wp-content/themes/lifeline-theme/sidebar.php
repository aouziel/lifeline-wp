<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
Sidebar
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->




<aside>
		<div class="sidebar_box">
			<!--<h3>Sample Side Tout</h3>
			<button>Learn more</button>-->
			<?php dynamic_sidebar('Sidebar Widgets'); ?>
		</div>


	    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar widgets 2')) : else : ?>
		<?php endif; ?>
</aside>