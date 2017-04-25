<?php
// Register Custom Post Type
function custom_post_type_awards() {

	$labels = array(
		'name'                  => 'Награды',
		'singular_name'         => 'Награда',
		'menu_name'             => 'Награды',
		'add_new_item'          => 'Добавить новую',
		'add_new'               => 'Добавить новую',
		'new_item'              => 'Новая',
		'edit_item'             => 'Редактировать',
		'update_item'           => 'Обновить',
		'view_item'             => 'Просмотр',
		'view_items'            => 'Посмотреть все',
	);
	
	$rewrite = array(
		'slug'                  => 'awards',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Награда',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'awards',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'artbt_awards', $args );

}
add_action( 'init', 'custom_post_type_awards', 0 );