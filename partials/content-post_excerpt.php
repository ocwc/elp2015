<div class="col-sm-4 post-excerpt">
	<a class="h3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<p><?php the_excerpt(); ?></p>

	<div class="row">
		<div class="col-sm-6">
			<a href="<?php the_permalink(); ?>">> Read more</a>
		</div>
		<div class="col-sm-6 text-right">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</div>
	</div>
</div>