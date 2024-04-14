<?php
/*------------------------------------------
 * 新着３件を表示させる
 * 表示させるものはアイキャッチ
 *----------------------------------------*/
function show_latest_work_thumbnails()
{
	$args = array(
		'post_type' => 'work', // カスタム投稿タイプを指定
		'posts_per_page' => 3, // 表示する投稿数を指定
	);
	$query = new WP_Query($args); // 変数名を $query に統一

	if ($query->have_posts()) :
		echo '<ul class="newworks__archive">';
		while ($query->have_posts()) : $query->the_post();
			echo '<li><div class="works__archive-card"><a href="' . get_permalink() . '">';
			if (has_post_thumbnail()) {
				the_post_thumbnail('medium');
			} else {
				echo '<img src="' . get_template_directory_uri() . '/assets/img/noimage.png" alt="">';
			}
			echo '</a></div></li>';
		endwhile;
		echo '</ul>';
	else :
		echo '<p>投稿が見つかりませんでした。</p>';
	endif;

	wp_reset_postdata(); // クエリのリセット
}
