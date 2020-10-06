<?php
	
	function wordpress_resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
	
	add_action('wp_enqueue_scripts', 'wordpress_resources');
	
	
	// navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu')
	));
	
	function get_top_ancestor_id(){
		
		global $post;
		
		if ($post->post_parent){
			$ancestors=array_reverse(get_post_ancestors($post->ID));
			return $ancestors[0];
		} 
		return $post->ID;
	}
?>