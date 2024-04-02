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
		$post_date = get_the_date('Y-n'); ?>

		<!-- tagを取得 -->
		<div class="work__tags">
			<?php
			// 現在の投稿に紐づいたタグを取得
			$tags = get_the_tags($post_id);

			if ($tags) {
				echo '<ul>';
				foreach ($tags as $tag) {
					echo '<li>' . esc_html($tag->name) . '</li>'; // タグ名をエスケープして表示
				}
				echo '</ul>';
			}
			?>
		</div>
		<!-- img -->
		<div class="work__img"><?= '<img src="esc_url($work_img)" alt="メイン画像">'; ?></div>
		<!-- 投稿年月 -->
		<time datetime="<?= "$post_date"; ?>"></time>

		<!-- 詳細内容 -->
		<div class="work__content ">
			<div class="work__content-tools content">
				<h3 class="content-title">Tools</h3>
				<p class="content-text"><?= esc_html($tools); ?></p>
			</div>

			<div class="work__content-period content">
				<h3 class="content-title">Period</h3>
				<p class="content-text"><?= esc_html($period); ?></p>
			</div>

			<div class="work__content-concepts content">
				<h3 class="content-title">Issues/Concepts</h3>
				<p class="content-text"><?= esc_html($concepts); ?></p>
			</div>

			<div class="work__content-points content">
				<h3 class="content-title">Points</h3>
				<p class="content-text"><?= esc_html($point); ?></p>
			</div>

			<div class="work__content-info">
				<h3 class="content-title">Related information</h3>
				<!-- 入力がある場合のみ表示にする -->
				<ul>
					<li>
						<?= esc_html($related_information); ?>
					</li>
					<li>
						<?= esc_html($github); ?>
					</li>
				</ul>
			</div>
			<!-- 参考画像も入力がある場合のみ表示にする -->


	</section>
	<!-- pagenation -->
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