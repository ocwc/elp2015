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
</div>

<?php get_footer(); ?>