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
	<section class="reserve">
		<header class="section-header reserve__title">reserve</header>
		<iframe class="reserve__calendar" src="https://coubic.com/knotdesign/widget/calendar" width="100%" height="600" style="border:none;"></iframe>
	</section>
</main>

<?php get_footer(); ?>