<?php

/**------------------------------------------
 * テーマの機能を追加する
 * @return void
 *------------------------------------------*/

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

/**------------------------------------------
 * <title>の区切り文字を変更する
 *------------------------------------------*/
function my_document_title_separator($separator)
{
	$separator = '|';
	return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');

/**------------------------------------------
 * CSSとJavaScriptの読み込み
 *------------------------------------------*/
function my_scripts_method()
{
	// jQuery の登録解除
	wp_deregister_script('jquery');

	// GSAP スクリプトの読み込み
	wp_enqueue_script(
		'gsap_script', // このスクリプトのハンドル名
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', // GSAPのCDN URL
		array(), // この例では依存関係なし
		'3.12.5', // GSAPのバージョン
		true // フッターでスクリプトを読み込む
	);

	// Swiper スクリプトの登録
	wp_enqueue_script(
		'swiper_script',
		get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',
		array('gsap_script'), // 依存関係に 'gsap_script' を追加
		null,
		true
	);

	// カスタムスクリプトの登録
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/assets/js/main.js',
		array('swiper_script'), // 依存関係に 'swiper_script' を追加
		null,
		true
	);

	// スクリプトにテンプレートディレクトリの URL を渡す
	$script_data = array('templateUrl' => get_template_directory_uri());
	wp_localize_script('custom_script', 'themeParams', $script_data);

	// Swiper スタイルシートの登録
	wp_enqueue_style(
		'swiper_style',
		get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',
		array(),
		null
	);

	// スタイルシートの登録
	wp_enqueue_style(
		'style-css',
		get_template_directory_uri() . '/assets/css/app.css',
		array('swiper_style') // 'swiper_style' に依存
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'works';
		$args['label'] = 'works';
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*------------------------------------------
 *  Post Type: works.
 *----------------------------------------*/
function cptui_register_my_cpts_work()
{
	$labels = [
		"name" => esc_html__("works", "custom-post-type-ui"),
		"singular_name" => esc_html__("work", "custom-post-type-ui"),
	];

	$args = [
		"label" => esc_html__("works", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "work", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-add-page",
		"supports" => ["title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "revisions"],
		"taxonomies" => ["design-tech-tools"],
		"show_in_graphql" => false,
	];

	register_post_type("work", $args);
}
add_action('init', 'cptui_register_my_cpts_work');



/*------------------------------------------
 * 特定のカスタム投稿タイプのアーカイブページである場合、そのカスタム投稿タイプの複数形ラベル（label）をタイトルとして使用
 * 将来的に他のカスタム投稿タイプを追加した場合にも、各カスタム投稿タイプのlabelに基づいたタイトルが表示される
 *----------------------------------------*/

add_filter('get_the_archive_title', function ($title) {
	// カスタム投稿タイプのアーカイブページの場合
	if (is_post_type_archive()) {
		$post_type = get_query_var('post_type');
		$post_type_object = get_post_type_object($post_type);
		if ($post_type_object) {
			$title = esc_html($post_type_object->labels->name);
		}
	}
	// 特定のカスタムタクソノミーのアーカイブページの場合
	elseif (is_tax('design-tech-tools')) {
		$title = single_term_title('', false);
	}
	return $title;
});
