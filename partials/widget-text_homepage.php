<div class="col-sm-4">
	<a class="highlight-box <?php echo 'highlight-box-' . get_field('widget_background_color', 'widget_' . $widget_id ); ?>" 
		href="<?php the_field('widget_url', 'widget_' . $widget_id ); ?>">

		<!--
		<img class="" 
			 src="<?php echo get_field('widget_image', 'widget_' . $widget_id )['url']; ?>" />
		-->

		<?php $url = get_field('widget_url', 'widget_' . $widget_id ); ?>
		<?php if ( strpos($url, '/about') > 0) : ?>
			<icon class="fa fa-question"></icon>
		<?php elseif ( strpos($url, '/schedules') > 0) : ?>
			<icon class="fa fa-pencil"></icon>
		<?php else : ?>
			<icon class="fa fa-desktop"></icon>
		<?php endif; ?>
		
		<span class="highlight-title"><?php echo $title; ?></span>

	</a>

	<p class="highlight-description">
		<?php the_field('widget_description', 'widget_' . $widget_id ); ?>
	</p>

	<a class="btn btn-violet <?php echo 'btn-' . get_field('widget_background_color', 'widget_' . $widget_id ); ?> btn-home-readmore" 
		href="<?php the_field('widget_url', 'widget_' . $widget_id ); ?>">Read more</a>

</div>