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
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		<div class="col-sm-12 col-md-offset-1 col-md-10">
			<?php the_content(); ?>
		</div>
	</article>
</div>