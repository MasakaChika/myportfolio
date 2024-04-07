<!-- content-postとworks-filterをまとめたもの -->


<?php
// タクソノミーのタームslugを取得します。
$term_slug = get_query_var('term');

$args = array(
	'post_type' => 'work', // カスタム投稿タイプのスラッグ
	'posts_per_page' => 12, // 表示する投稿数。-1は全ての投稿を表示
);

// タームslugが存在する場合、クエリ引数にフィルターを追加
if (!empty($term_slug)) {
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'design-tech-tools', // カスタムタクソノミーのスラッグ
			'field' => 'slug',
			'terms' => $term_slug, // URLから取得したタームslug
		),
	);
}

$the_query = new WP_Query($args);

if ($the_query->have_posts()) : ?>
	<ul class="works__archive">
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<li>
				<div class="works__archive-card">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php else : ?>
							<img src="<?= get_template_directory_uri(); ?>/assets/img/noimage.png" alt="">
						<?php endif; ?>
					</a>
				</div>
			</li>
		<?php endwhile; ?>
	</ul>
<?php
	wp_reset_postdata();
else : ?>
	<p>投稿が見つかりませんでした。</p>
<?php endif; ?>