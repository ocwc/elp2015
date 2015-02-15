<div class="col-sm-4">
	<a class="highlight-box <?php echo 'highlight-box-' . get_field('widget_background_color', 'widget_' . $widget_id ); ?>" href="#">
		
		<span class="highlight-title">About the Program</span>

		<img class="pull-right" 
			 src="<?php echo get_field('widget_image', 'widget_' . $widget_id )['url']; ?>" />
	</a>

	<p class="highlight-description">
		<?php the_field('widget_description', 'widget_' . $widget_id ); ?>
	</p>

	<a class="btn <?php echo 'btn-' . get_field('widget_background_color', 'widget_' . $widget_id ); ?>" href="#">Read more</a>

</div>