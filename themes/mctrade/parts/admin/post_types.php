<?php

add_action( 'init', 'register_post_hardware' );

function register_post_hardware(){
	register_post_type('post_hardware', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Оборудование', // основное название для типа записи
			'singular_name'      => 'Оборудование', // название для одной записи этого типа
			'add_new'            => 'Добавить оборудование', // для добавления новой записи
			'add_new_item'       => 'Добавление оборудования', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать оборудование', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Оборудование', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-share-alt',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
?>