	<div id="sidebar-right" class="sidebar col-xs-12 col-md-4">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar')
		        || !dynamic_sidebar('Right Sidebar') ) : ?>
			<?php endif; ?>
		</ul>
	</div>