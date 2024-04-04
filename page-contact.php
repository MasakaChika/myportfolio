<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

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




			<section class="contact">
				<?php get_template_part('template-parts/header', 'title'); ?>

			</section>
		</main>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>