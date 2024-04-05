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

		// カスタムフィールドの値を取得(get_post_meta(&post_id, $key, $single))
		$attachment_id = get_post_meta($post_id, 'work-img', true); // カスタムフィールド 'work-img' から画像の添付ファイル ID を取得
		$image_url = wp_get_attachment_image_src($attachment_id, 'full')[0];	// 添付ファイル ID から画像の URL を取得
		$tools = get_post_meta($post_id, 'tools', true);
		$period = get_post_meta($post_id, 'period', true);
		$concepts = get_post_meta($post_id, 'concepts', true);
		$points = get_post_meta($post_id, 'points', true);
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
					echo '<li>' . esc_html($tag->name) . '</li>'; // タグ名をエスケープ処理して表示
				}
				echo '</ul>';
			}
			?>
		</div>
		<!-- img -->

		<?php
		// URL が存在するか確認し、存在する場合は画像を表示
		if (!empty($image_url)) {
			echo '<div class="work__img">';
			echo '<img src="' . esc_url($image_url) . '" alt="メイン画像" >';
			echo '</div>';
		} else {
			// 画像が見つからない場合の処理をここに書く
			echo '<p>画像が見つかりません。</p>';
		}
		?>
		<!-- <div class="work__img">
			<?= '<img src="' . esc_url($image_url) . '" alt="メイン画像">'; ?>
		</div> -->
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
				<p class="content-text"><?= esc_html($points); ?></p>
			</div>



			<!-- 入力がある場合のみ表示にする -->
			<div class="work__content-info">
				<h3 class="content-title">Related information</h3>
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
		<?php $prevpost = get_adjacent_post(false, '', true);
		if ($prevpost) : ?>
			<div class="post__pagination__prev">
				<a href="<?php echo get_permalink($prevpost->ID); ?>">
					<span class="post__pagination__prev-text"><?php echo esc_attr($prevpost->post_title); ?></span>
				</a>
			</div>
		<?php endif; ?>
		<?php $nextpost = get_adjacent_post(false, '', false);
		if ($nextpost) : ?>
			<div class="post__pagination__next">
				<a href="<?php echo get_permalink($nextpost->ID); ?>">
					<span class="post__pagination__next-text"><?php echo esc_attr($nextpost->post_title); ?></span>
				</a>
			</div>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>