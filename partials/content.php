<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<div class="col-sm-12 col-md-offset-1 col-md-10">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php the_content(); ?>
	</div>
</article>