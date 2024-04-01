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

/**
 * <title>の区切り文字を変更する
 *
 */
function my_document_title_separator($separator)
{
	$separator = '|';
	return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');

// CSSとJavaScriptの読み込み 
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


//title
function determine_language_class($post_id)
{
	$title = get_the_title($post_id);

	// 英語のみで構成されているかチェック（ASCII文字のみ）
	if (preg_match('/^[A-Za-z0-9 .,!?]+$/', $title)) {
		return 'enFont';
	}
	// 日本語を含むかチェック（ひらがな、カタカナ、漢字）
	elseif (preg_match('/[\x{3040}-\x{30FF}\x{4E00}-\x{9FAF}]+/u', $title)) {
		return 'jpFont';
	}
	// どちらでもない場合はデフォルトクラスを返す（オプション）
	else {
		return 'defaultFont';
	}
}

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
