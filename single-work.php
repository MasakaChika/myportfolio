<?php get_header(); ?>
<main>
	<section class="work">
		<header class="work__title">
			<?php the_title(); ?>
		</header>

		<?php
		// 投稿IDと各種メタ情報の取得
		$post_id = get_the_ID();
		$attachment_id = get_post_meta($post_id, 'work-img', true); // カスタムフィールド 'work-img' から画像の添付ファイル ID を取得
		$image_url = wp_get_attachment_image_src($attachment_id, 'full')[0]; // 添付ファイル ID から画像の URL を取得
		$tools = get_post_meta($post_id, 'tools', true);
		$period = get_post_meta($post_id, 'period', true);
		$concepts = get_post_meta($post_id, 'concepts', true);
		$points = get_post_meta($post_id, 'points', true);
		$related_information = get_post_meta($post_id, 'related-information', true);
		$gallery = get_post_meta($post_id, 'gallery', true);
		$post_date = get_the_date('Y-m');
		?>

		<!-- タグの出力 -->
		<div class="work__tags">
			<?php
			$terms = wp_get_post_terms($post_id, 'design-tech-tools');
			if (!is_wp_error($terms) && !empty($terms)) {
				echo '<ul>';
				foreach ($terms as $term) {
					$term_link = get_term_link($term);
					if (!is_wp_error($term_link)) {
						echo '<li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
					}
				}
				echo '</ul>';
			} else {
				echo '<p>タグが見つかりません。</p>';
			}
			?>
		</div>

		<!-- 画像の出力 -->
		<?php if (!empty($image_url)) : ?>
			<div class="work__img">
				<img src="<?= esc_url($image_url); ?>" alt="メイン画像" loading="lazy">
			</div>
		<?php else : ?>
			<p>画像が見つかりません。</p>
		<?php endif; ?>

		<!-- 詳細内容 -->
		<article class="work__content">
			<div class="work__content-left">
				<section class="work__content-date">
					<time datetime="<?= $post_date; ?>">
						<?= date('Y-m', strtotime($post_date)); ?>
					</time>
				</section>

				<section class="work__content-tools content">
					<h3 class="content-title">制作ツール</h3>
					<div class="content-text"><?= esc_html($tools); ?></div>
				</section>

				<section class="work__content-period content">
					<h3 class="content-title">制作期間</h3>
					<div class="content-text"><?= esc_html($period); ?></div>
				</section>

				<section class="work__content-concepts content">
					<h3 class="content-title">課題・コンセプト</h3>
					<div class="content-text"><?= wp_kses_post($concepts); ?></div>
				</section>
			</div>

			<div class="work__content-right">
				<section class="work__content-points content">
					<h3 class="content-title">ポイント</h3>
					<div class="content-text"><?= wp_kses_post($points); ?></div>
				</section>

				<?php if (!empty($related_information)) : ?>
					<section class="work__content-info content">
						<h3 class="content-title">関連情報</h3>
						<div class="content-text"><?= wp_kses_post($related_information); ?></div>
					</section>
				<?php endif; ?>

				<?php if (!empty($gallery)) : ?>
					<section class="work__content-gallery content">
						<h3 class="content-title">ギャラリー</h3>
						<div class="content-text"><?= wp_kses_post($gallery) ?></div>
					</section>
				<?php endif; ?>

			</div>
		</article>
	</section>
	<!-- pagenation -->
	<?php get_template_part('template-parts/post', 'navigation'); ?>
	<section class="newarchive-works">
		<header class="section-subheader newworks__title">new works</header>
		<?php show_latest_work_thumbnails(); ?>
	</section>


</main>
<?php get_footer(); ?>