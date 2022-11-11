<?php

/************************************************************************************************/
/*
/*  Custom Post Types
*/

function los_post_types() {

	register_post_type( 'product',
		array(
		'labels' => array(
			'name' => 'Produkte',
			'singular_name' => 'Produkt',
			'menu_position' => 5
		),
		'has_archive' => true,
		'menu_position' => 5,
		'public' => true,
		'supports' => array(
			'title','editor','excerpt','custom-fields','thumbnail'
		)
		)
	);

	register_taxonomy(
		"product_category", 
		array("product"),
		array(
			"hierarchical" => true,
			"label" => "Produktkategorien",
			"singular_label" => "Produktkategorie",
			"rewrite" => true)
	);

}

add_action( 'init', 'los_post_types' );

//

add_action('restrict_manage_posts', 'product_category_filter');

function product_category_filter() {
	global $typenow;
	$post_type = 'product'; // change to your post type
	$taxonomy  = 'product_category'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}

add_filter('parse_query', 'product_category_filter_do');

function product_category_filter_do($query) {
	global $pagenow;
	$post_type = 'product'; // change to your post type
	$taxonomy  = 'product_category'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}

?>