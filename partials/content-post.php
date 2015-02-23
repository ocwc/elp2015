<div class="container container-white">
	<div class="row entry-title-row">
		<div class="col-sm-12 col-md-offset-1 col-md-6">
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		</div>
	</div>
</div>

<div class="container container-white">
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		<div class="col-sm-12 col-md-offset-1 col-md-10">			
			<div class="row">
				<div class="col-sm-12">
					<p>
						<?php $categories_list = get_the_category_list( ', ' ); ?>
						<span class="cat-links">
							<?php echo $categories_list; ?>
						</span>
						on <?php the_time('F j, Y'); ?> by <?php the_author(); ?>
					</p>
				</div>
			</div>

			

			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'op' ) ); ?>
			
		</div>
	</article>
</div>