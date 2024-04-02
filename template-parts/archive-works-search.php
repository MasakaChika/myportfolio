<div class="archive-works__search">
	<span>search</span>
	<hr />
	<ul>
		<?php
		$terms = get_terms([
			'taxonomy' => 'design-tech-tools', // カスタムタクソノミー名をここに設定
			'hide_empty' => true, // 投稿がないタームは除外
		]);
		if (!empty($terms) && !is_wp_error($terms)) {
			foreach ($terms as $term) {
				echo '<li class="works__seach-tag"><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
			}
		}
		?>
	</ul>
</div>