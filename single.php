<?php get_header(); ?>
<div id="main" class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if (have_posts()) {?>
			<?php $thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0]; ?>
			<img src="<?php echo $thumb_url; ?>" width="100%">
			<div class="row">
				<div class="col-md-8">
					<?php  while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>
					<h4>Posted on <?php the_time('F jS, Y') ?></h4>
					<p><?php the_content(__('(more...)')); ?></p>

					<?php $counter++;
					if ($counter % 2 == 0) {
						echo '</div><div class="row">';
					}endwhile;?>
				</div>
				<?php } else{ ?> <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <?php } ?>
				<div class="col-md-4">
					<?php get_sidebar();?>
				</div>
				<div class="navigation">
					<div class="alignleft">
						<?php previous_post('&laquo; &laquo; %','Previo: ', 'yes'); ?>
					</div>
					<div class="alignright">
						<?php next_post('% &raquo; &raquo; ','Proximo ', 'yes'); ?>
					</div>
				</div> <!-- end navigation -->


			</div> 
			
		</div>	    
	</div>

	<div id="delimiter"></div>
	<?php get_footer(); ?>