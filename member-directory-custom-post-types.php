function cptui_register_my_cpts() {

	/**
	 * Post Type: Network Members.
	 */

	$labels = array(
		"name" => __( 'Network Members' ),
		"singular_name" => __( 'Network Member' ),
	);

	$args = array(
		"label" => __( 'Network Members' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "member", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-id-alt",
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
		"taxonomies" => array( "post_tag" ),
	);

	register_post_type( "member", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
