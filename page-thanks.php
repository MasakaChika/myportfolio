<?php get_header(); ?>
<main>
	<?php
	// カスタムフィールド 'vertical-jp' の値を取得します。
	// get_the_ID() は現在のページまたは投稿の ID を返します。
	$vertical_value = get_post_meta(get_the_ID(), 'vertical-jp', true);

	// 現在のページのタイトルを取得し、大文字に変換します。
	$page_title_uppercase = strtoupper(get_the_title());

	get_template_part('template-parts/vertical-category', null, array(
		'vertical' => $vertical_value, // カスタムフィールドの値
		'horizontal' => $page_title_uppercase, // 大文字に変換したページタイトル
	));
	?>


</main>
<?php get_footer(); ?>