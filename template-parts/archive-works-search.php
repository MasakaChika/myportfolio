<div class="archive-works__search">
	<span>search</span>
	<hr />
	<ul>
		<?php

		$terms = get_terms([
			'taxonomy' => 'design-tech-tools', // カスタムタクソノミー名
			'hide_empty' => true, // 投稿がないタームを除外
			'orderby' => 'term_id', // IDに基づいて並び替え
			'order' => 'ASC', // 昇順（ASC）または降順（DESC）
		]);

		if (!empty($terms) && !is_wp_error($terms)) {
			foreach ($terms as $term) {
				// 各タグの前に "#" をつけて出力
				echo '<li class="works__search-tag"><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
			}
		}
		?>
	</ul>
</div>