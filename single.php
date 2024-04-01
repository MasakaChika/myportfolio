<?php get_header(); ?>
<main>

	<section class="work">
		<header class="work__title">
			<?php
			// 投稿IDを基に言語に応じたクラス名を取得
			$language_class = determine_language_class(get_the_ID());
			?>

			<!-- 言語に基づいたクラスを適用した要素 -->
			<div class="<?= esc_attr($language_class); ?>">
				<?php the_title(); ?>
			</div>
		</header>

		<?php
		// 投稿のIDを取得
		$post_id = get_the_ID();

		// カスタムフィールドの値を取得
		$work_img = get_post_meta($post_id, 'work-img', true);
		$tools = get_post_meta($post_id, 'tools', true);
		$period = get_post_meta($post_id, 'period', true); // 誤字(peirod)を修正
		$concepts = get_post_meta($post_id, 'concepts', true);
		$point = get_post_meta($post_id, 'point', true);
		$related_information = get_post_meta($post_id, 'related-information', true);
		$github = get_post_meta($post_id, 'github', true);
		$gallery = get_post_meta($post_id, 'gallery', true); // 提案したフィールド名を使用
		$post_date = get_the_date('Y-n');
		?>

		<div class="work__tags">
			<?php
			$post_tags = get_the_tags($post->ID);
			if ($post_tags) {
				echo '<ul>'; // <ul>タグでリストを開始
				foreach ($post_tags as $tag) {
					echo '<li>' . $tag->name . '</li>'; // 各タグ項目を<li>で囲む
				}
				echo '</ul>'; // <ul>タグでリストを閉じる
			}
			?>
		</div>

		<div class="work__img"><?= '<img src="esc_url($work_img)" alt="メイン画像">'; ?></div>
		<div class="work__content">
			<time datetime="<?= "$post_date"; ?>"></time>
			<div class="content">
				<div class="content-title">Tools</div>
				<p class="content-text"><?= esc_html($tools); ?></p>
				<div class="content-title">Period</div>
				<p class="content-text"><?= esc_html($period); ?></p>
				<div class="content-title">Issues/Concepts</div>
				<p class="content-text"><?= esc_html($concepts); ?></p>
				<div class="content-title">Points</div>
				<p class="content-text"><?= esc_html($point); ?></p>
				<div class="content-title">Related information</div>
				<p class="content-text"><?= esc_html($related_information); ?></p>
			</div>
		</div>

	</section>
	<div class="post__pagination">
		<?php $nextpost = get_adjacent_post(false, '', false);
		if ($nextpost) : ?>
			<div class="post__pagination__left">
				<a href="<?php echo get_permalink($nextpost->ID); ?>">
					<span class="post__pagination__left__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
					<span class="post__pagination__left__text">«<?php echo esc_attr($nextpost->post_title); ?></span>
				</a>
			</div>
		<?php endif; ?>
		<?php $prevpost = get_adjacent_post(false, '', true);
		if ($prevpost) : ?>
			<div class="post__pagination__right">
				<a href="<?php echo get_permalink($prevpost->ID); ?>">
					<span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
					<span class="post__pagination__right__text"><?php echo esc_attr($prevpost->post_title); ?>»</span>
				</a>
			</div>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>