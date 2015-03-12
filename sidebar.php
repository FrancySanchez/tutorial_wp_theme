<div id="sidebar">
	<h2 ><?php _e('Categories'); ?></h2>
	<ul >
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</ul>
	<h2 ><?php _e('Archives'); ?></h2>
	<ul >
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>
<?php if ( is_active_sidebar( 'primary_sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'primary_sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
