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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', get_post_type() . '_excerpt' ); ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>