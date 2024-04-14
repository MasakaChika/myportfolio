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
	<section class="thanks-message">
		<div class="thanks-message__container">
			<header class="thanks-message__title">お問い合わせありがとうございます</header>
			<p class="thanks-message__text">送信が完了しました。お問い合わせいただいた内容には、数日中にメールで回答させていただきます。<br>しばらくお待ちください。</p>
			<a href="<?= home_url(); ?>" class="form-btn">home</a>
		</div>
	</section>

</main>
<?php get_footer(); ?>