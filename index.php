<?php get_header(); ?>
<div id="main" class="container">
	<div class="row">
		<div class="col-md-12">
			<img src="http://placehold.it/1200x400" width="100%">
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<?php if (have_posts()) {?>
			<div class="row">
				<?php  while (have_posts()) : the_post(); ?>
				<div class="col-md-6">
					<?php the_post_thumbnail(); ?>
					<a href="<?php echo get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
					<h4>Posted on <?php the_time('F jS, Y') ?></h4>
					<p><?php the_content(__('(more...)')); ?></p>
					<a href="<?php echo get_permalink(); ?>">Leer más</a>
					<hr> 
				</div>
				<?php $counter++;
				if ($counter % 2 == 0) {
					echo '</div><div class="row">';
				}endwhile;?>
			</div>
			<?php } else{ ?> <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <?php } ?>
			
			<div class="navigation"><p><?php posts_nav_link('&#8734;','&laquo;&laquo; Previo','Proximo &raquo;&raquo;'); ?></p></div>

		</div> 
		<div class="col-md-4">
			<?php get_sidebar();?>
		</div>
	</div>	    
</div>

<div id="delimiter"></div>
<?php get_footer(); ?>