<?php $custom_query = new WP_Query(array(
									'post_type' => 'slideshow',
									'ignore_sticky_posts' => 1,
									'orderby' => 'rand',
									'posts_per_page' => -1
									));
?>

<ul class="rslides">
	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
		<?php $image_list = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image' );

			if (count($image_list) > 0) {
				$image_src = $image_list[0];
			}
		?>

		<li class="slide">
			<?php if ( get_field('slideshow_url') ) : ?>
				<a href="<?php the_field('slideshow_url'); ?>">
					<img src="<?php echo $image_src; ?>" />
				</a>
			<?php else: ?>
				<img src="<?php echo $image_src; ?>" />
			<?php endif; ?>

			<?php if ( get_field('slideshow_show_description') ) : ?>
				<?php if ( get_field('slideshow_url') ) : ?>
					<a class="card"
						href="<?php the_field('slideshow_url') ?>" >
				<?php else : ?>
					<span class="card">
				<?php endif; ?>
				
				<span class="card-title"><?php the_title(); ?></span>
				<?php if ( get_field('slideshow_description') ) : ?>
					<span class="card-description"><?php the_field('slideshow_description'); ?></span>
				<?php endif; ?>
			
				<?php if ( get_field('slideshow_url') ) : ?>
					<div class="card-readmore"><i class="fa fa-arrow-right"></i> Read more</div>
					</a>
				<?php else : ?>
					</span>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( get_field('slideshow_photo_license_text') ) :?>
				<div class="attribution">
					<a href="<?php the_field('slideshow_photo_source_url'); ?>" target="_blank">
						<i class="fa fa-info"></i> 
						<span class="attribution-text"><?php the_field('slideshow_photo_license_text'); ?></span>
					</a>
				</div>
			<?php endif; ?>
		</li>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</ul>