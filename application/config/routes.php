<?php
return [
	// MAIN
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'/' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'sitemap' => [
		'controller' => 'main',
		'action' => 'sitemap',
	],
	'search_page' => [
		'controller' => 'main',
		'action' => 'search_page',
	],
	'brand_search/{brand:\S+}' => [
		'controller' => 'main',
		'action' => 'brand_search',
	],
	'payment_check' => [
		'controller' => 'account',
		'action' => 'payment_check',
	],
	// PRODUCT
	'product/{id:\w+}' => [
		'controller' => 'product',
		'action' => 'page',
	],
	'product_review/new_review' => [
		'controller' => 'product',
		'action' => 'new_review',
	],
	// CATALOG
	'catalog' => [
		'controller' => 'catalog',
		'action' => 'main',
	],
	'gcatalog/{category:\w+}' => [
		'controller' => 'catalog',
		'action' => 'gcatalog',
	],
	'catalog/{product:\w+}' => [
		'controller' => 'catalog',
		'action' => 'catalog_router',
	],
	'catalog/{product:\w+}/sort/{type:\w+}' => [
		'controller' => 'catalog',
		'action' => 'catalog_router',
	],
	// CART
	'cart' => [
		'controller' => 'cart',
		'action' => 'main',
	],
	'cart/get_cart_count' => [
		'controller' => 'cart',
		'action' => 'get_cart_count',
	],
	'cart/add_item' => [
		'controller' => 'cart',
		'action' => 'add_item',
	],
	'cart/empty_cart' => [
		'controller' => 'cart',
		'action' => 'empty_cart',
	],
	'cart/delete_item' => [
		'controller' => 'cart',
		'action' => 'delete_item',
	],
	'cart/cart_order' => [
		'controller' => 'cart',
		'action' => 'cart_order',
	],
	// CLIENTS
	'clients/callback' => [
		'controller' => 'clients',
		'action' => 'callback',
	],
	// TOP MENU
	'top_menu/about_us' => [
		'controller' => 'top_menu',
		'action' => 'about_us',
	],
	'top_menu/services' => [
		'controller' => 'top_menu',
		'action' => 'services',
	],
	'top_menu/prices' => [
		'controller' => 'top_menu',
		'action' => 'prices',
	],
	'top_menu/heating_system' => [
		'controller' => 'top_menu',
		'action' => 'heating_system',
	],
	'top_menu/catalog' => [
		'controller' => 'top_menu',
		'action' => 'catalog',
	],
	'top_menu/contacts' => [
		'controller' => 'top_menu',
		'action' => 'contacts',
	],
	'top_menu/contacts_send' => [
		'controller' => 'top_menu',
		'action' => 'contacts_send',
	],
	'top_menu/price/{id:\w+}' =>[
		'controller' => 'top_menu',
		'action' => 'price_list',
	],

	// ADMIN
	'admin' =>[
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/panel' =>[
		'controller' => 'admin',
		'action' => 'panel',
	],
	'admin/log_in' =>[
		'controller' => 'admin',
		'action' => 'log_in',
	],
	'admin/products' =>[
		'controller' => 'admin',
		'action' => 'products',
	],
	'admin/create_product' =>[
		'controller' => 'admin',
		'action' => 'create_product',
	],
	'admin/currency' =>[
		'controller' => 'admin',
		'action' => 'currency',
	],
	'admin/currency_auto_update' =>[
		'controller' => 'admin',
		'action' => 'currency_auto_update',
	],
	'admin/product_update' =>[
		'controller' => 'admin',
		'action' => 'product_update',
	],
	'admin/product_del' =>[
		'controller' => 'admin',
		'action' => 'product_del',
	],
	'admin/add_category' =>[
		'controller' => 'admin',
		'action' => 'add_category',
	],
	'admin/add_lower_category' =>[
		'controller' => 'admin',
		'action' => 'add_lower_category',
	],
	'admin/add_manufacturer' =>[
		'controller' => 'admin',
		'action' => 'add_manufacturer',
	],
	'admin/del_manufacturer' =>[
		'controller' => 'admin',
		'action' => 'del_manufacturer',
	],
	'admin/add_slide' =>[
		'controller' => 'admin',
		'action' => 'add_slide',
	],
	'admin/del_slide' =>[
		'controller' => 'admin',
		'action' => 'del_slide',
	],
	'admin/upd_reviews' =>[
		'controller' => 'admin',
		'action' => 'upd_reviews',
	],
	'admin/upd_params' =>[
		'controller' => 'admin',
		'action' => 'upd_params',
	],
	'admin/copy_item' =>[
		'controller' => 'admin',
		'action' => 'copy_item',
	],
	'admin/update_filter' =>[
		'controller' => 'admin',
		'action' => 'update_filter',
	],
	'admin/del_category' =>[
		'controller' => 'admin',
		'action' => 'del_category',
	],
	'admin/del_lcategory' =>[
		'controller' => 'admin',
		'action' => 'del_lcategory',
	],
	'admin/upd_lower_category' =>[
		'controller' => 'admin',
		'action' => 'upd_lower_category',
	],
	'admin/upd_category' =>[
		'controller' => 'admin',
		'action' => 'upd_category',
	],
	'admin/update_gcategory' =>[
		'controller' => 'admin',
		'action' => 'update_gcategory',
	],
	'admin/update_category' =>[
		'controller' => 'admin',
		'action' => 'update_category',
	],
	'admin/update_lcategory' =>[
		'controller' => 'admin',
		'action' => 'update_lcategory',
	],
	'admin/update_slide_href' =>[
		'controller' => 'admin',
		'action' => 'update_slide_href',
	],
];
?>
