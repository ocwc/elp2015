<?php get_header(); ?>

<div class="container container-slides">
	<div class="row">
		<?php get_template_part('partials/_rslides'); ?>
	</div>
</div>

<div class="container container-white">
	<div class="row">
		<?php dynamic_sidebar('homepage_top'); ?>
	</div>

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
</div>

<?php get_footer(); ?>