<?php
// Register Custom Post Type
function custom_post_type_services() {

	$labels = array(
		'name'                  => 'Услуги',
		'singular_name'         => 'Услуга',
		'menu_name'             => 'Услуги',
		'add_new_item'          => 'Добавить новую',
		'add_new'               => 'Добавить новую',
		'new_item'              => 'Новая',
		'edit_item'             => 'Редактировать',
		'update_item'           => 'Обновить',
		'view_item'             => 'Просмотр',
		'view_items'            => 'Посмотреть все',
		);
	
	$rewrite = array(
		'slug'                  => 'sevices',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
		);
	$args = array(
		'label'                 => 'Услуги',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'sevices',
		'rewrite'               => $rewrite,
		);
	register_post_type( 'artbt_sevices', $args );


	$labels = array(
		'name'					=> 'Рубрики услуг',
		'singular_name'			=> 'Рубрика',
		'menu_name'				=> 'Рубрика услуг',
		);
	
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
		);
	
	register_taxonomy( 'service-cat', array( 'artbt_sevices' ), $args );


}
add_action( 'init', 'custom_post_type_services', 0 );