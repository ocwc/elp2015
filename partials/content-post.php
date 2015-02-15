<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<div class="col-sm-12 col-md-offset-1 col-md-10">			
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="row">
			<div class="col-sm-2">
				<?php $categories_list = get_the_category_list( ', ' ); ?>
				<span class="cat-links">
					<?php echo $categories_list; ?>
				</span>
			</div>
			<div class="col-sm-3">
				<p class="datetime"><?php the_time('F j, Y'); ?></p>
			</div>
			<div class="col-sm-2">
				<?php the_author(); ?>
			</div>
		</div>

		

		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'op' ) ); ?>
		
	</div>
</article>