<?php
/*
	Template name: Side menu
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<div class="container container-white">
			<div class="row entry-title-row">
				<img class="entry-title-image" src="<?php echo get_template_directory_uri(); ?>/img/top_image.png" />
				<div class="col-sm-7 pull-right">
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				</div>
			</div>
		</div>

		<div class="container container-white">
			<aside class="col-sm-3 col-md-2 row aside-menu">
				<?php wp_nav_menu( array('menu' => 'side', 'theme_location' => 'side' )); ?>
			</aside>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
				<div class="col-sm-9 entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>

		<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>