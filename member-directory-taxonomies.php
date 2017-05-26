function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Member Types.
	 */

	$labels = array(
		"name" => __( 'Member Types' ),
		"singular_name" => __( 'Member Type' ),
	);

	$args = array(
		"label" => __( 'Member Types' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Member Types",
		"show_ui" => false,
		"show_in_menu" => false,
		"show_in_nav_menus" => false,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'member_type', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "member_type", array( "member" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
