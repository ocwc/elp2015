<?php get_header(); ?>

<div class="container container-slides">
	<div class="row">
		<?php get_template_part('partials/_rslides'); ?>
	</div>
</div>

<?php /*
<div class="container container-white container-white-home">
	<div class="entry-title-row row">
		<img class="entry-title-image" src="<?php echo get_template_directory_uri(); ?>/img/top_image.png" />
		<div class="col-sm-12 col-md-6 pull-right">
			<h2 class="entry-title text-left">
				<span class="u-color-white">Welcome to the eLearning Pioneers Web site</span>
			</h2>
		</div>
	</div>
</div>

*/ ?>

<div class="container container-white">
	<div class="row highlights-wrapper">
		<?php dynamic_sidebar('homepage_top'); ?>
	</div>

	<div class="row testimonials-wrapper">
		<h2 class="testimonial-title">What participants are saying</h2>
		<?php get_template_part('partials/_testimonials'); ?>
	</div>

	<?php /*
	<?php if ( have_posts() ) : ?>
		<div class="row news-wrapper">
			<div class="col-sm-12">
				<h2>News & Updates</h2>
			</div>
			<?php $custom_query = new WP_Query(array(
										'post_type' => 'post'
									));
			?>
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				<?php get_template_part( 'partials/content', get_post_type() . '_excerpt' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php endif; ?>
	*/ ?>
</div>

<?php get_footer(); ?>