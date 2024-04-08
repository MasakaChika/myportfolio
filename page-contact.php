<?php get_header(); ?>
<main>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
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
				<div class="contact__container">
					<?php get_template_part('template-parts/header', 'title'); ?>
					<?php the_content(); ?>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>