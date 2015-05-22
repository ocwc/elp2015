<?php $custom_query = new WP_Query(array(
									'post_type' => 'testimonial',
									'ignore_sticky_posts' => 1,
									'orderby' => 'rand',
									'posts_per_page' => -1
									));
?>

<ul class="rslides rslides-testimonials">
	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
		<li class="slide">
			<div class="testimonial">
				<i class="fa fa-quote-left"></i>
				<?php the_title(); ?>
				<i class="fa fa-quote-right"></i>
			</div>
		</li>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</ul>