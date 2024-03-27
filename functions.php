<?php

/**
 * テーマの機能を追加する
 * @return void
 */

function my_theme_support()
{
	//titleタグを出力する
	add_theme_support('title-tag');

	// アイキャッチ画像を有効化
	add_theme_support('post-thumbnails');

	//カスタムメニューを作成する
	add_theme_support('menus');

	//HTML5による出力
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}
add_action('after_setup_theme', 'my_theme_support');

function my_document_title_separator($separator)
{
	return '|';
}
add_filter('document_title_separator', 'my_document_title_separator');

/* CSSとJavaScriptの読み込み 
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.1', true);
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');
*/
function my_scripts_method()
{
	wp_deregister_script('jquery');
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/assets/js/main.js',
	);
	wp_enqueue_style(
		'style-css',
		get_template_directory_uri() . '/assets/css/app.css',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
