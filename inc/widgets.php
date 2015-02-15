<?php

// Creating the widget 
class elp_text_widget extends WP_Widget
{    
    function __construct()
    {
        parent::__construct(
            'elp_text_widget', 
            'ELP Text Widget', 
            array(
            'description' => 'Simple widget with our template'
        ));
    }
    
    public function widget($args, $instance)
    {
    	$title = apply_filters('widget_title', $instance['title']);
    	$widget_id = $args['widget_id'];
    	
    	ob_start();
    	include(locate_template('partials/widget-text_homepage.php'));
    	echo ob_get_clean();
    }
    
    // Widget Backend 
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = 'New Title';
        }
        // Widget admin form
?>
<p>
<label for="<?php
        echo $this->get_field_id('title');
?>"><?php
        _e('Title:');
?></label> 
<input class="widefat" id="<?php
        echo $this->get_field_id('title');
?>" name="<?php
        echo $this->get_field_name('title');
?>" type="text" value="<?php
        echo esc_attr($title);
?>" />
</p>
<?php
    }
    
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance          = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

function elp_load_text_widget()
{
    register_widget('elp_text_widget');
}
add_action('widgets_init', 'elp_load_text_widget');
