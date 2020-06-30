<?php
	function Example_CPT() {
		register_post_type( 'example',
			array (
				'labels' => array(
					'name' => 'Example',
					'singular_name' => 'Example',					
					'add_new_item' => 'Add New Example',
					'edit' => 'Edit Example',
					'new_item' => 'New Example',
					'view_item' => 'View Example',
					'search_items' => 'Search Examples',
					'not_found' => 'No Examples Found',
					'not_found_in_trash' => 'No Examples found in trash',
				),

				'public' => true,			
				'has_archive'	=> true,
				'supports' => array( 'title', 'editor', 'thumbnail'),
				'show_ui'  =>   true
			)
		);
	}
	add_action( 'init', 'example_CPT' );
?>